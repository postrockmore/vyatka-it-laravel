@extends('layouts.app')

@section('content')
    <section class="mb-section">
        <div class="container">
            <div class="pb-section">
                @include('sections.breadcrumbs')

                <div class="flex flex-col">
                    <h1 class="title title-h2">{{ __('projects.title') }}</h1>

                    <div class="flex flex-col mt-4">
                        <div class="flex items-center gap-6 overflow-x-auto text-nowrap">
                            <a href="#" class="toggler active">Все</a>
                            <a href="#" class="toggler">Интернет-магазины</a>
                            <a href="#" class="toggler">Сайты</a>
                            <a href="#" class="toggler">Приложения</a>
                            <a href="#" class="toggler">Интеграции</a>
                        </div>

                        <div class="grid grid-cols-1/1 tablet:grid-cols-2 desktop:grid-cols-6 gap-5 desktop:gap-8 mt-6 desktop:mt-14">
                            @foreach($projects as $project)
                                @if(in_array($loop->iteration, [1, 2]))
                                    <div class="desktop:col-span-3">
                                        <x-project-card :title="$project['title']" :thumbnail="$project['image']"></x-project-card>
                                    </div>
                                @else
                                    <div class="desktop:col-span-2">
                                        <x-project-card :title="$project['title']" :thumbnail="$project['image']"></x-project-card>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
