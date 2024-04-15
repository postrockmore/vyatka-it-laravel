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
                            <a href="{{ route('projects') }}" class="toggler {{ !isset($current_category) ? 'active' : '' }}">Все</a>

                            @foreach($categories as $category)
                                <a href="{{ route('projects.category', $category) }}" class="toggler {{ isset($current_category) && $current_category->slug == $category->slug ? 'active' : '' }}">{{ $category->title }}</a>
                            @endforeach
                        </div>

                        @if ($projects->isNotEmpty())
                            <div class="grid grid-cols-2 desktop:grid-cols-6 gap-5 desktop:gap-8 mt-5 desktop:mt-14">
                                @foreach($projects as $project)
                                    @if(in_array($loop->iteration, [1, 2]))
                                        <div class="col-span-2 desktop:col-span-3">
                                            <x-project-card :title="$project['title']" :thumbnail="$project['image']" :link="route('project', $project)"></x-project-card>
                                        </div>
                                    @else
                                        <div class="col-span-1 desktop:col-span-2">
                                            <x-project-card :title="$project['title']" :thumbnail="$project['image']" :link="route('project', $project)"></x-project-card>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            @if ($projects->hasPages())
                                <div class="flex items-center justify-between mt-18">
                                    <div class="flex">
                                        {{ $projects->links() }}
                                    </div>

                                    @if ($projects->hasMorePages())
                                        <div class="flex">
                                            <a href="{{ $projects->nextPageUrl() }}" class="btn btn--second">Следующая →</a>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @else
                            <p class="desktop:mt-14">Данный раздел пуст</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
