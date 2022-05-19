@extends("layouts.frontend")
@section('content')

    <head>
        <title>Portfolyo</title>
        <meta name="description" content="Portfolyo">
    </head>
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="anasayfa">Anasayfa</a></li>
                    <li class="active">Portfolyo</li>
                </ul>
                <h1 class="title h2">Portfolyo</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100"><img
                    src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble"></li>
            <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200"><img
                    src="{{ asset('assets/frontend/media/others/bubble-11.png') }}" alt="Bubble"></li>
            <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><img
                    src="{{ asset('assets/frontend/media/others/line-4.png') }}" alt="Line"></li>
        </ul>
    </div>

    <section class="section section-padding-equal  pt_md--80 pt_sm--60">
        <div class="container">
            <div class="axil-isotope-wrapper">
                <div class="row isotope-list">
                    @foreach ($works as $work)
                        <div class="col-xl-4 col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="portfolyo/{{ $work->slug }}">
                                        <img src="{{ asset('uploads/' . $work->image) }}" alt="{{ $work->title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a
                                            href="portfolyo/{{ $work->slug }}">{{ $work->title }}</a></h4>
                                    <span class="subtitle">{{ $work->content }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@push('customJs')
@endpush

@push('customCss')
@endpush
