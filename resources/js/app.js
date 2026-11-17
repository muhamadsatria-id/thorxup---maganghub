const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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
        if (window.innerWidth >= 768) {
            closeNav();
        }
    });
}

// Hero carousel: autoplay, arrows, dots, swipe, and pause on hover.
(() => {
    const track = document.getElementById('carouselTrack');
    const container = document.getElementById('heroCarousel');

    if (!track || !container) {
        return;
    }

    const slides = [...track.children];
    const dots = [...container.querySelectorAll('.carousel-dot')];
    const previousButton = container.querySelector('#carouselPrevBtn');
    const nextButton = container.querySelector('#carouselNextBtn');

    if (slides.length === 0) {
        return;
    }

    let currentSlide = 0;
    let autoPlayTimer = null;
    let isDragging = false;
    let isHovering = false;
    let startX = 0;

    const updateCarousel = (index) => {
        currentSlide = (index + slides.length) % slides.length;
        track.style.transform = `translateX(-${currentSlide * 100}%)`;

        dots.forEach((dot, dotIndex) => {
            dot.className = dotIndex === currentSlide
                ? 'carousel-dot transition-all duration-300 w-8 h-2.5 rounded-full bg-secondary-fixed shadow-md'
                : 'carousel-dot transition-all duration-300 w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/70';
            dot.setAttribute('aria-current', dotIndex === currentSlide ? 'true' : 'false');
        });
    };

    const stopAutoPlay = () => {
        if (autoPlayTimer) {
            window.clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
    };

    const startAutoPlay = () => {
        stopAutoPlay();

        if (prefersReducedMotion || isHovering || document.visibilityState !== 'visible') {
            return;
        }

        autoPlayTimer = window.setInterval(() => updateCarousel(currentSlide + 1), 6000);
    };

    previousButton?.addEventListener('click', (event) => {
        event.stopPropagation();
        stopAutoPlay();
        updateCarousel(currentSlide - 1);
        startAutoPlay();
    });

    nextButton?.addEventListener('click', (event) => {
        event.stopPropagation();
        stopAutoPlay();
        updateCarousel(currentSlide + 1);
        startAutoPlay();
    });

    dots.forEach((dot) => {
        dot.addEventListener('click', (event) => {
            event.stopPropagation();
            stopAutoPlay();
            updateCarousel(Number(dot.dataset.slideIndex ?? 0));
            startAutoPlay();
        });
    });

    container.addEventListener('pointerdown', (event) => {
        if (event.target.closest('button') || event.target.closest('a')) {
            return;
        }

        isDragging = true;
        startX = event.clientX;
        stopAutoPlay();
    });

    container.addEventListener('pointerup', (event) => {
        if (!isDragging) {
            return;
        }

        isDragging = false;
        const diffX = event.clientX - startX;

        if (diffX > 50) {
            updateCarousel(currentSlide - 1);
        } else if (diffX < -50) {
            updateCarousel(currentSlide + 1);
        }

        startAutoPlay();
    });

    container.addEventListener('pointercancel', () => {
        isDragging = false;
        startAutoPlay();
    });

    container.addEventListener('mouseenter', () => {
        isHovering = true;
        stopAutoPlay();
    });

    container.addEventListener('mouseleave', () => {
        isHovering = false;
        startAutoPlay();
    });

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoPlay();
            return;
        }

        startAutoPlay();
    });

    container.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            event.preventDefault();
            updateCarousel(currentSlide - 1);
        }

        if (event.key === 'ArrowRight') {
            event.preventDefault();
            updateCarousel(currentSlide + 1);
        }
    });

    updateCarousel(0);
    startAutoPlay();
})();

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
