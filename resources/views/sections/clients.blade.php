<section>
    <div class="container">
        <div class="flex flex-col">
            <h2 class="visually-hidden">Наши клиенты</h2>
            <div class="flex" data-clients>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($clients as $client)
                            <div class="flex grayscale hover:grayscale-0 transition-all">
                                <img src="{{ $client['icon'] }}" alt="{{ $client['title'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>