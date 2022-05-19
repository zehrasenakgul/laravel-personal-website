@extends('layouts.frontend')
@section('content')

    <head>
        <title>{{ $work->title }}</title>
        <meta name="description" content="Portfolyo">
    </head>
    <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                        data-sal-delay="300">
                        <h1 style="text-align: initial;" class="title h2">{{ $work->title }}</h1>
                        <a href="{{ $work->content }}" style="text-decoration: none;color:black" target="_blank">
                            <p>{{ $work->content }}</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                        <img class="paralax-image" src="{{ asset('uploads/' . $work->image) }}" alt="Illustration">
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/frontend/media/others/bubble-20.png') }}" alt="Bubble">
            </li>
        </ul>
    </div>
@endsection

@push('customJs')
@endpush

@push('customCss')
@endpush
