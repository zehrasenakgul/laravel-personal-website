@extends('layouts.frontend')
@section('content')

    <head>
        <title>@yield('title', $settings['title'])</title>
        <meta name="description" content="@yield(' description', $settings['description'])">
    </head>
    @include('frontend.include.banner')
    @include('frontend.include.work')
    @include('frontend.include.testimonial')
    @include('frontend.include.skills')
    @include('frontend.include.action')


    {{-- @include('frontend.include.about') --}}
@endsection

@push('customJs')
@endpush

@push('customCss')
@endpush
