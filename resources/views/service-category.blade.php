@extends('layouts.app')

@section('content')
    <section class="mb-section">
        <div class="container">
            <div class="pb-section">
                @include('sections.breadcrumbs')

                <div class="flex flex-col">
                    <h1 class="title title-h2">{{ $category->title }}</h1>

                    <div class="flex flex-col mt-10">
                        <div class="
                            grid grid-cols-12 gap-2
                            [&>*:nth-child(6n+1)]:col-span-6
                            [&>*:nth-child(6n+2)]:col-span-6
                            [&>*:nth-child(6n+3)]:col-span-7
                            [&>*:nth-child(6n+4)]:col-span-5
                            [&>*:nth-child(6n+5)]:col-span-5
                            [&>*:nth-child(6n+6)]:col-span-7
                        ">
                            @foreach($services as $service)
                                <x-service-card
                                    background="{{ $category->color }}"
                                    title="{{ $service->title }}"
                                    description="{{ $service->excerpt }}"
                                    deadlines="{{ $service->deadlines }}"
                                    price="{{ $service->price }}"
                                    link="{{ route('services.single', $service) }}"
                                >
                                    {!! $service->icon !!}
                                </x-service-card>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('sections.content', ['content' => $category->description])
@endsection
