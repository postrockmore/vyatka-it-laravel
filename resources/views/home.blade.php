@extends('layouts.app')

@section('header')
    @include('blocks.header', [
        'classes' => 'header-opacity',
        'is_opacity' => true
    ])
@endsection

@section('content')
    @include('sections.offer')
    @include('sections.about')
    @include('sections.achievements')
    @include('sections.projects')
    @include('sections.services')

    <div class="my-section">
        @include('sections.stages')
    </div>

    @include('sections.reviews')
    @include('sections.clients')
    @include('sections.partner_services')
    @include('sections.get_project')
    @include('sections.contacts')
@endsection
