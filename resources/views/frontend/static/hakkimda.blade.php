@extends("layouts.frontend")
@section('content')

    <head>
        <title>@yield("title",$page['title'])</title>
        <meta name="description" content="@yield(" description",$page['description'])">
    </head>
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    @php($hakkimda = $modules->where('slug', 'hakkimda')->toArray())
                    @php($hakkimda = array_shift($hakkimda))
                    <li><a href="anasayfa">Anasayfa</a></li>
                    <li class="active">{{ $hakkimda['title'] }}</li>
                </ul>
                <h1 class="title h2">{{ $hakkimda['title'] }}</h1>
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
    <section class="section section-padding case-study-featured-area">
        <div class="container">
            <div class="row">
                <div class="section-heading mb--90">
                    @php($ben_kimim = $modules->where('slug', 'selam-ben-zehra-sena')->toArray())
                    @php($ben_kimim = array_shift($ben_kimim))
                    <span class="subtitle">{{ $hakkimda['description'] }}</span>
                    <h2 class="title">{{ $ben_kimim['title'] }}</h2>
                    <p>{{ $ben_kimim['description'] }}</p>
                </div>



            </div>
        </div>
    </section>
@endsection

@push('customJs')
@endpush

@push('customCss')
@endpush
