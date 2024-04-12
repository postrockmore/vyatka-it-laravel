@extends('layouts.app')

@section('content')
    <section class="mb-section">
        <div class="container">
            <div class="pb-section">
                @include('sections.breadcrumbs')

                <div class="flex flex-col">
                    <h1 class="title title-h2">{{ __('promotions.title') }}</h1>

                    <div class="grid grid-cols-1/1 tablet:grid-cols-2 gap-8 mt-10">
                        @foreach($promotions as $promotion)
                            <button class="flex rounded-xl overflow-hidden">
                                <img src="{{ $promotion['thumbnail'] }}" alt="{{ $promotion['title'] }}">
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('sections.get_project')
@endsection
