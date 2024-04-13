<section class="py-section">
    <div class="container">
        <div class="flex flex-col">
            <h2 class="title title-h2">Проекты, которыми гордимся</h2>

            <div class="flex flex-col mt-5">
                <div class="flex items-center gap-6 overflow-x-auto text-nowrap">
                    <a href="#" class="toggler active">Все</a>
                    <a href="#" class="toggler">Интернет-магазины</a>
                    <a href="#" class="toggler">Сайты</a>
                    <a href="#" class="toggler">Приложения</a>
                    <a href="#" class="toggler">Интеграции</a>
                </div>

                <div class="grid grid-cols-1/1 tablet:grid-cols-2 desktop:grid-cols-3 gap-5 desktop:gap-8 mt-6 desktop:mt-14">
                    @foreach($projects as $project)
                        <x-project-card :title="$project['title']" :thumbnail="$project['image']" :link="route('project', $project)"></x-project-card>
                    @endforeach
                </div>

                <button class="btn bg-button-more w-full tablet:py-5 text-main mt-5 desktop:mt-8">Показать ещё</button>
            </div>
        </div>
    </div>
</section>
