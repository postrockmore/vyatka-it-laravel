<section class="px-0 py-8 desktop:p-18 bg-bg-main-dark flex justify-center">
    <div class="flex flex-col items-stretch w-full max-w-[91rem] pt-8 pb-0 laptop:py-28 laptop:pl-8 bg-bg-second-dark rounded-2xl desktop:rounded-[5.5rem] relative overflow-hidden" style="--bg: rgba(82, 203, 255, 0.15)" data-hover-element>
        <div class="container">
            <h2 class="title title-h2 text-main-dark">Хотите заказать проект?</h2>
            <p class="text-body-dark mt-4 max-w-[30rem]">Чтобы мы смогли оценить примерную стоимость и сроки, расскажите о своем проекте в нескольких словах. Укажите контакты и мы с вами свяжемся.</p>
            <form action="#" class="flex flex-col mt-8 laptop:max-w-[37.5rem]">
                <div class="flex flex-wrap gap-2">
                    <x-ui.radio name="project_type" label="Сайт" checked="true"></x-ui.radio>
                    <x-ui.radio name="project_type" label="Интернет-магазин"></x-ui.radio>
                    <x-ui.radio name="project_type" label="Мобильное приложение"></x-ui.radio>
                    <x-ui.radio name="project_type" label="Веб-сервис"></x-ui.radio>
                    <x-ui.radio name="project_type" label="Доработка"></x-ui.radio>
                </div>

                <div class="grid tablet:grid-cols-2 gap-3 tablet:gap-8 mt-6 tablet:mt-8">
                    <div class="tablet:col-span-2 flex flex-col gap-3 tablet:gap-8">
                        <x-ui.input name="about" placeholder="Немного о проекте и примерный бюджет"></x-ui.input>
                        <x-ui.input name="email" placeholder="E-Mail"></x-ui.input>
                    </div>

                    <x-ui.input type="tel" name="phone" placeholder="Телефон"></x-ui.input>
                    <x-ui.input name="name" placeholder="Имя"></x-ui.input>
                </div>

                <div class="flex flex-col tablet:flex-row items-start tablet:items-center gap-2 tablet:gap-6 mt-6 tablet:mt-14">
                    <button type="submit" class="button button--accent w-full tablet:w-auto">Отправить заявку</button>

                    <div class="max-w-[283px] text-disable-dark">
                        @include('blocks.term')
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-8 flex justify-center laptop:mt-0 laptop:absolute laptop:top-0 laptop:right-0 h-full w-full max-w-full laptop:max-w-[280px] desktop:max-w-[350px] wide:max-w-[608px] bg-bg-main-dark/2 px-8 pt-8 laptop:p-[3.125rem] laptop:pr-0 items-center">
            <img class="w-full max-w-[380px] laptop:max-w-none laptop:h-[728px] -mb-12 object-cover object-left" src="{{ Vite::image('get_project/mockup.png') }}" alt="Мокап">
        </div>
    </div>
</section>
