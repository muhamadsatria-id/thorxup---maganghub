@props([
    'items' => [],
])

<nav aria-label="Breadcrumb" class="flex items-center gap-space-xs mb-space-md">
    @foreach ($items as $index => $item)
        @if ($index > 0)
            <span class="material-symbols-outlined text-outline text-[14px]">chevron_right</span>
        @endif

        @if (! empty($item['url']))
            <a
                class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1"
                href="{{ $item['url'] }}"
            >
                @if ($loop->first)
                    <span class="material-symbols-outlined text-[16px]">home</span>
                @endif
                {{ $item['label'] }}
            </a>
        @else
            <span class="font-label-md text-label-md text-primary font-semibold flex items-center gap-1">
                @if ($loop->first)
                    <span class="material-symbols-outlined text-[16px]">home</span>
                @endif
                {{ $item['label'] }}
            </span>
        @endif
    @endforeach
</nav>