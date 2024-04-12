<div class="swiper-slide flex flex-col items-start tablet:w-full tablet:max-w-[416px] overflow-hidden">
    <div class="text-5xl desktop:text-stages font-extrabold text-stroke relative pr-2.5">
        {{ $num }}.
        
        @if (!isset($last))
            <div class="absolute bottom-6 left-full w-[500px] border border-dashed border-border-brand"></div>
        @endif
    </div>
    <span class="pt-1.5 desktop:mt-8 text-main-dark">{{ $title }}</span>
    <p class="mt-1.5 text-caption-dark max-w-[288px]">{{ $description }}</p>
</div>