<footer class="bg-main text-caption-dark">
    <div class="container">
        <div class="flex items-center flex-col laptop:flex-row justify-between gap-4 py-6 text-nowrap">
            <div class="flex items-center gap-x-3">
                <img src="{{ Vite::image('logo.svg') }}" alt="Логотип Вятка-IT">
                <div class="flex flex-col">
                    <span class="text-white">Вятка IT</span>
                    <span class="text-caption-dark text-xs">Веб-студия</span>
                </div>
            </div>
            
            @if($links)
                <nav class="flex flex-wrap flex-col tablet:flex-row justify-center items-center gap-x-6 gap-y-4 tablet:gap-y-2">
                    @foreach($links as $link)
                        <a class="footer-link" href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                            
                            @if ($link['tag'])
                                <span class="footer-link-label">{{ $link['tag'] }}</span>
                            @endif
                        </a>
                    @endforeach
                </nav>
            @endif
            
            <div class="flex items-center gap-4">
                <a class="text-main-dark" href="mailto:info@vyatka-it.ru">info@vyatka-it.ru</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex items-center flex-col laptop:flex-row flex-wrap justify-between gap-4 py-2.5 border-t border-border-main-dark">
            <p class="text-center">© 2015-{{ now()->format('Y') }} Веб-студия «Вятка IT». Все права защищены.</p>
            <a href="#">
                <img class="max-w-[14.375rem]" src="{{ Vite::image('arda.png') }}" alt="">
            </a>
            <a class="text-center" href="/term">Политика конфиденциальности</a>
        </div>
    </div>
</footer>