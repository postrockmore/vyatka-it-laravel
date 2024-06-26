<section class="flex items-center laptop:min-h-[37.5rem] desktop:min-h-[50.625rem] relative mb-section" data-header-mt data-header-pt>
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute left-0 top-0 right-0 bottom-0 bg-bg-alpha-dark"></div>
        <picture>
            <source srcset="{{ Vite::image('offer/offer-1.webp') }}">
            <img class="w-full h-full object-cover" src="{{ Vite::image('offer/offer-1.png') }}" alt="Картинка главного слайдера">
        </picture>
    </div>
    <div class="container z-10 py-8 desktop:py-0">
        <div class="flex flex-col max-w-[46.75rem]">
            <h1 class="title title-h1 text-main-dark">{{ __('offer.title') }}</h1>
            <p class="mt-6 desktop:mt-8 text-main-dark">{!! __('offer.description') !!}</p>
            <div class="flex items-stretch desktop:items-center flex-col desktop:flex-row gap-4 mt-6 desktop:mt-12">
                <button class="button button--accent">
                    {{ __('offer.action_button') }}
                    <span class="emoji emoji--medium emoji--work"></span>
                </button>
                <button class="button button--second-dark">
                    {{ __('offer.consultation_button') }}
                    <span class="emoji emoji--medium emoji--ghost"></span>
                </button>
            </div>
        </div>
    </div>
</section>
