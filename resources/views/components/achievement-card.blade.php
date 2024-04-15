<a data-fancybox="achievements" href="{{ $image }}" class="achievement-card h-full">
    <div class="achievement-card-inner">
        <div class="achievement-card-front bg-bg-main flex flex-col items-center p-4 rounded-xl overflow-hidden" data-achievement-front>
            <div class="w-[5.625rem] h-[5.625rem]">
                {{ $slot }}
            </div>
            <p class="text-center mt-2 mb-4">{{ $text }}</p>
            <span class="mt-auto text-caption">{{ __('achievements.bulit_footer') }}2023</span>
        </div>
        <div class="achievement-card-back rounded-xl overflow-hidden">
            <img src="{{ $image }}" alt="{{ $text }}">
        </div>
    </div>
</a>
