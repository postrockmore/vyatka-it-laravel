@extends('layouts.app')

@section('content')
    <section class="mb-section">
        <div class="container">
            <div class="pb-section">
                @include('sections.breadcrumbs')

                <div class="flex flex-col">
                    <h1 class="title title-h2">{{ $service->title }}</h1>

                    @if ($service->description)
                        <div class="mt-6 max-w-[43.75rem]">
                            {!! $service->description !!}
                        </div>
                    @endif

                    <div class="pt-section flex flex-col">
                        @if ($service->bullits or $service->price or $service->deadlines)
                            <div class="pt-section grid grid-cols-2 gap-x-6 gap-y-16 text-lg">
                                @foreach($service->bullits as $bullit)
                                    <div class="flex flex-col items-start">
                                        <span class="title title-h3">{{ $bullit['name'] }}</span>
                                        <p class="mt-4 text-body max-w-[31rem]">{!! nl2br($bullit['text']) !!}</p>
                                    </div>
                                @endforeach

                                @if ($service->deadlines)
                                    <div class="flex flex-col items-start">
                                        <span class="title title-h3">Сроки: <span class="text-button-accent">{{ $service->deadlines }}</span></span>
                                    </div>
                                @endif

                                @if ($service->price)
                                    <div class="flex flex-col items-start">
                                        <span class="title title-h3">Стоимость: <span class="text-button-accent">{{ $service->price }}</span></span>
                                        <button class="text-link mt-4">Расчитать стоимость</button>
                                    </div>
                                @endif
                            </div>
                        @endif

                        <sep class="w-full h-px bg-border-main my-24"></sep>

                        @if ($projects)
                            <div class="flex flex-col">
                                <span class="title title-h2">Результаты наших клиентов</span>
                                <p class="mt-6 text-lg">Реальный кейсы наших клиентов, которые заказали у нас <br>
                                    интернет-магазин и получили положительные результаты</p>
                                <div class="flex flex-col mt-16">
                                    @foreach($projects as $project)
                                        <x-service-project-card :project="$project"></x-service-project-card>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('sections.say_project')

    @include('sections.stages')

    @include('sections.content', ['content' => $service->seo_text])
@endsection
