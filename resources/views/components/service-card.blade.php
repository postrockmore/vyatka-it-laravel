<a href="{{ $link }}" class="flex flex-col justify-between relative p-12 rounded-xl  min-h-[25.25rem] {{ $class }}" style="--bg: {{ $background }}; background: var(--bg);" data-hover-element data-hover-element-with-border>
    <div class="flex flex-col">
        <span class="title title-h3">{{ $title }}</span>
        <p class="text-body mt-4">{{ $description }}</p>
    </div>
    <div class="flex items-start gap-x-7">
        @if ($deadlines)
            <div class="flex flex-col">
                <span class="text-caption text-xs">Сроки</span>
                <p class="text-lg">{{ $deadlines }}</p>
            </div>
        @endif

        @if ($price)
            <div class="flex flex-col">
                <span class="text-caption text-xs">Стоимость</span>
                <p class="text-lg">{{ $price }}</p>
            </div>
        @endif
    </div>
    <div class="absolute bottom-10 right-10 w-20 h-20">
        {{ $slot }}
    </div>
</a>

