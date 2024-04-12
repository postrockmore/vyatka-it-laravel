@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            @include('sections.breadcrumbs')
            
            <div class="flex flex-col">
                <h1 class="title title-h2">Отзывы и благодарности</h1>
                
                <div class="flex flex-col mt-6">
                    <div class="flex items-center justify-between border-b border-border-controls">
                        <div class="flex items-center gap-6 text-body">
                            <button class="toggler toggler-dark toggler-with-element pb-2 active">Отзывы</button>
                            <button class="toggler toggler-dark toggler-with-element pb-2">Благодарности</button>
                        </div>
                    </div>
                    
                   <div class="flex">
                       <div class="flex flex-col gap-6 tablet:block relative pt-6 desktop:pt-16 w-full overflow-hidden" data-masonry="reviews">
                           @foreach($reviews as $review)
                               <div class="tablet:absolute">
                                   <x-review-card
                                           name="{{ $review['name'] }}"
                                           avatar="{{ $review['avatar'] }}"
                                           date="{{ $review['date'] }}"
                                           text="{{ $review['text'] }}"
                                   ></x-review-card>
                               </div>
                           @endforeach
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection