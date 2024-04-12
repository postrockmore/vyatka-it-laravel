<section class="flex items-center laptop:min-h-[37.5rem] desktop:min-h-[50.625rem] relative mb-section" data-header-mt data-header-pt>
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute left-0 top-0 right-0 bottom-0 bg-bg-alpha-dark"></div>
        <img class="w-full h-full object-cover" src="{{ Vite::image('offer/offer-1.png') }}" alt="">
    </div>
    <div class="container z-10 py-8 desktop:py-0">
        <div class="flex flex-col max-w-[46.75rem]">
            <h1 class="title title-h1 text-main-dark">{{ __('offer.title') }}</h1>
            <p class="mt-6 desktop:mt-8 text-main-dark">{!! __('offer.description') !!}</p>
            <div class="flex items-stretch desktop:items-center flex-col desktop:flex-row gap-4 mt-6 desktop:mt-12">
                <button class="btn btn--accent">{{ __('offer.action_button') }}</button>
                <button class="btn btn--second">{{ __('offer.consultation_button') }}</button>
            </div>
        </div>
    </div>
</section>
