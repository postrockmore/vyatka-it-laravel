<section class="my-section py-section">
    <div class="container">
        <div class="flex flex-col">
            <h2 class="title title-h2">Наши клиенты о нас</h2>
            <p class="mt-3 desktop:mt-6 max-w-[700px]">Равным образом, высокое качество позиционных исследований не <br>
                                          оставляет шанса для экономической целесообразности.</p>
            <div class="flex flex-col">
                <div class="relative">
                    <div class="flex flex-col gap-6 tablet:block relative desktop:max-h-[68.75rem] pt-6 desktop:pt-16 overflow-hidden" data-masonry="reviews">
                        @foreach($reviews as $review)
                            <div class="tablet:absolute">
                                <x-review-card
                                        name="{{ $review['name'] }}"
                                        avatar="{{ $review['avatar'] }}"
                                        date="{{ $review['date'] }}"
                                        text="{{ $review['text'] }}"
                                ></x-review-card>
                            </div>
                        @endforeach
                    </div>

                    <div class="hidden desktop:block reviews-gradient absolute bottom-0 left-0 w-full h-[200px]"></div>
                </div>

                <a class="button button--light mt-6 desktop:mt-0" href="#">Смотреть все отзывы →</a>
            </div>
        </div>
    </div>
</section>
