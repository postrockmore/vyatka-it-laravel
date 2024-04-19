@extends('layouts.app')

@section('content')
    <section class="mb-section">
        <div class="container">
            <div class="pb-section">
                @include('sections.breadcrumbs')

                <div class="flex flex-col">
                    <h1 class="title title-h2">{{ $project->title }}</h1>

                    <div class="flex flex-col-reverse desktop:flex-row gap-y-5 gap-x-16 mt-3 desktop:mt-10">
                        <div class="flex project-textbox w-full">
                            {!! $project->content !!}
                        </div>

                        <div class="flex flex-col desktop:max-w-[17.5rem]">
                            <button class="button button--second button--mini">
                                <svg class="w-6 h-6" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 11.888C1.5 11.888 6.16006 18.9991 12.5 18.9991C18.8399 18.9991 23.5 11.888 23.5 11.888C23.5 11.888 18.8399 5.00391 12.5 5.00391C6.16006 5.00391 1.5 11.888 1.5 11.888ZM3.3721 11.9032C3.41171 11.9536 3.4531 12.0056 3.49626 12.0593C3.99662 12.6817 4.72408 13.5095 5.63098 14.3332C7.48441 16.0164 9.88362 17.4991 12.5 17.4991C15.1164 17.4991 17.5156 16.0164 19.369 14.3331C20.2759 13.5095 21.0034 12.6817 21.5037 12.0593C21.5469 12.0056 21.5883 11.9535 21.6279 11.9032C21.5929 11.8603 21.5565 11.8161 21.5188 11.7707C21.0195 11.1694 20.2931 10.369 19.387 9.57249C17.5386 7.94731 15.1336 6.50391 12.5 6.50391C9.86642 6.50391 7.46144 7.94731 5.61296 9.57249C4.70694 10.3691 3.98051 11.1694 3.48118 11.7707C3.44346 11.8161 3.4071 11.8603 3.3721 11.9032Z" fill="#0B0B0B"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 12.0001C16 13.9331 14.433 15.5001 12.5 15.5001C10.567 15.5001 8.99997 13.9331 8.99997 12.0001C8.99997 10.0671 10.567 8.50008 12.5 8.50008C14.433 8.50008 16 10.0671 16 12.0001ZM12.5 14.0001C13.6045 14.0001 14.5 13.1046 14.5 12.0001C14.5 10.8955 13.6045 10.0001 12.5 10.0001C11.3954 10.0001 10.5 10.8955 10.5 12.0001C10.5 13.1046 11.3954 14.0001 12.5 14.0001Z" fill="#0B0B0B"/>
                                </svg>

                                {{ __('project.view_mode') }}
                            </button>

                            @if ($project->excerpt || $project->url)
                                <div class="flex flex-col items-start mt-6">
                                    <span class="title title-h3" >{{ __('project.about') }}</span>

                                    @if ($project->excerpt)
                                        <p class="mt-2 text-body">
                                            {{ $project->excerpt }}
                                        </p>
                                    @endif

                                    @if($project->url)
                                        <a class="text-link custom-underline mt-2" href="{{ $project->url }}" target="_blank">{{ $project->url }}</a>
                                    @endif
                                </div>
                            @endif

                            <div class="flex flex-col text-body mt-6">
                                <p>{{ __('project.share') }}</p>

                                <div class="mt-1.5">
                                    @include('blocks.share_buttons')
                                </div>
                            </div>

                            <div class="flex flex-col mt-6">
                                <p class="text-sm text-caption leading-6">{{ __('project.contact_us') }}</p>
                                <button class="button button--accent button--mini text-lg mt-2">
                                    {{ __('project.send_order') }}
                                    <span class="emoji emoji--work"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
