<div class="flex flex-col items-start px-8 pb-10 border border-border-main rounded-xl">
    <div class="relative -mt-5">
        <img
                class="w-14 h-14 rounded-full overflow-hidden object-cover"
                src="{{ $avatar }}"
                alt="{{ $name }}">
        <img
                class="absolute bottom-0 -right-2"
                src="{{ Vite::image('icons/review-vk.svg') }}" alt="Иконка ВК">
    </div>
    <div class="flex flex-col gap-1 mt-4">
        <span class="text-main">{{ $name }}</span>
        <time class="text-xs text-caption">{{ $date }}</time>
    </div>
    <div class="mt-4 text-body">
        {{ $text }}
    </div>
</div>