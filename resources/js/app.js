const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// Header elevation on scroll.
const header = document.querySelector('[data-header]');

if (header) {
    const syncHeader = () => header.classList.toggle('is-scrolled', window.scrollY > 8);

    syncHeader();
    window.addEventListener('scroll', syncHeader, { passive: true });
}

// Mobile navigation disclosure.
const navToggle = document.querySelector('[data-nav-toggle]');
const navPanel = document.querySelector('[data-nav-panel]');

if (navToggle && navPanel) {
    const openIcon = navToggle.querySelector('[data-nav-icon="open"]');
    const closeIcon = navToggle.querySelector('[data-nav-icon="close"]');

    const closeNav = () => {
        navPanel.classList.add('hidden');
        navToggle.setAttribute('aria-expanded', 'false');
        openIcon?.classList.remove('hidden');
        closeIcon?.classList.add('hidden');
    };

    navToggle.addEventListener('click', () => {
        const isOpen = navToggle.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeNav();
            return;
        }

        navPanel.classList.remove('hidden');
        navToggle.setAttribute('aria-expanded', 'true');
        openIcon?.classList.add('hidden');
        closeIcon?.classList.remove('hidden');
    });

    navPanel.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeNav));

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && navToggle.getAttribute('aria-expanded') === 'true') {
            closeNav();
            navToggle.focus();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            closeNav();
        }
    });
}

// Hero carousel with autoplay, dots, arrows, and pause on interaction.
const carousels = document.querySelectorAll('[data-carousel]');

carousels.forEach((carousel) => {
    const slides = [...carousel.querySelectorAll('[data-slide]')];

    if (slides.length < 2) {
        return;
    }

    const dots = [...carousel.querySelectorAll('[data-carousel-dot]')];
    const previousButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    const status = carousel.querySelector('[data-carousel-status]');
    const intervalMs = 7000;

    let index = slides.findIndex((slide) => !slide.classList.contains('hidden'));
    let timer = null;
    let isHovering = false;
    let isFocused = false;

    if (index < 0) {
        index = 0;
    }

    const render = (nextIndex, announce = true) => {
        index = (nextIndex + slides.length) % slides.length;

        slides.forEach((slide, slideIndex) => {
            const isActive = slideIndex === index;

            slide.classList.toggle('hidden', !isActive);
            slide.setAttribute('aria-hidden', String(!isActive));
        });

        dots.forEach((dot, dotIndex) => {
            const isActive = dotIndex === index;

            dot.dataset.active = String(isActive);
            dot.setAttribute('aria-current', String(isActive));
        });

        if (status && announce) {
            status.textContent = `Slide ${index + 1} dari ${slides.length}`;
        }
    };

    const stop = () => {
        if (timer) {
            window.clearInterval(timer);
            timer = null;
        }
    };

    const start = () => {
        stop();

        if (prefersReducedMotion || isHovering || isFocused || document.visibilityState !== 'visible') {
            return;
        }

        timer = window.setInterval(() => render(index + 1), intervalMs);
    };

    previousButton?.addEventListener('click', () => render(index - 1));
    nextButton?.addEventListener('click', () => render(index + 1));

    dots.forEach((dot) => {
        dot.addEventListener('click', () => render(Number(dot.dataset.index ?? 0)));
    });

    carousel.addEventListener('mouseenter', () => {
        isHovering = true;
        stop();
    });

    carousel.addEventListener('mouseleave', () => {
        isHovering = false;
        start();
    });

    carousel.addEventListener('focusin', () => {
        isFocused = true;
        stop();
    });

    carousel.addEventListener('focusout', (event) => {
        if (!carousel.contains(event.relatedTarget)) {
            isFocused = false;
            start();
        }
    });

    carousel.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            event.preventDefault();
            render(index - 1);
        }

        if (event.key === 'ArrowRight') {
            event.preventDefault();
            render(index + 1);
        }
    });

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stop();
            return;
        }

        start();
    });

    render(index, false);
    start();
});

// Scroll reveal for sections below the fold.
const revealItems = document.querySelectorAll('.reveal');

if (revealItems.length > 0) {
    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    } else {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                });
            },
            { rootMargin: '0px 0px -10% 0px', threshold: 0.1 },
        );

        revealItems.forEach((item) => observer.observe(item));
    }
}
