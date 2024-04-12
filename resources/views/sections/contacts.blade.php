<section class="pb-0 pt-section desktop:py-section h-auto laptop:h-[50.625rem] flex flex-col relative">
    <div class="container flex-1">
        <div class="flex flex-col justify-between py-section h-full">
            <div class="flex flex-col flex-1">
                <h2 class="title title-h2">Контакты</h2>
                <div class="flex flex-col gap-6 mt-3 tablet:mt-12">
                    <div class="flex tablet:flex-row flex-col items-start gap-1 tablet:gap-4">
                        <span class="tablet:w-[13.625rem]">Телефон</span>
                        <span>8 (8332) 411-451</span>
                    </div>
                    <div class="flex tablet:flex-row flex-col items-start gap-1 tablet:gap-4">
                        <span class="tablet:w-[13.625rem]">Почта</span>
                        <a class="text-link" href="mailto:info@vyatka-it.ru">info@vyatka-it.ru</a>
                    </div>
                    <div class="flex tablet:flex-row flex-col items-start gap-1 tablet:gap-4">
                        <span class="tablet:w-[13.625rem]">Офис</span>
                        <span>Киров, Октябрьский пр-т 120, офис 512</span>
                    </div>
                    <div class="flex tablet:flex-row flex-col items-start gap-1 tablet:gap-4">
                        <span class="tablet:w-[13.625rem]">Режим работы</span>
                        <span>
                            Пн−Пт: 9:00 − 17:00<br>
                            Сб−Вс: выходной
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 mt-8">
                    <div class="flex tablet:flex-row flex-col items-start gap-1 tablet:gap-4">
                        <span class="tablet:w-[13.625rem]">Руководитель проектов</span>
                        <div class="flex flex-col gap-2">
                            <a class="text-link" href="#">Евгений Лысков</a>
                            <div class="flex items-center gap-4">
                                <a href="#">8 (953) 945 30-55</a>
                                
                                @include('blocks.messengers')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                @include('blocks.socials')
            </div>
        </div>
    </div>
    <div class="desktop:absolute desktop:top-0 desktop:right-0 w-full desktop:max-w-[42%] h-[400px] desktop:h-full bg-bg-main-dark"></div>
</section>