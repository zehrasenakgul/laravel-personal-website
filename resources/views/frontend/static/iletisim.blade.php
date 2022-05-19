@extends('layouts.frontend')
@section('content')

    <head>
        <title>@yield('title', $page['title'])</title>
        <meta name="description" content="@yield(' description', $page['description'])">
    </head>
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    @php($iletisim = $modules->where('slug', 'iletisim')->toArray())
                    @php($iletisim = array_shift($iletisim))
                    <li><a href="anasayfa">Anasayfa</a></li>
                    <li class="active">{{ $iletisim['title'] }}</li>
                </ul>
                <h1 class="title h2">{{ $iletisim['title'] }}</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/frontend/media/others/bubble-17.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('assets/frontend/media/others/line-4.png') }}" alt="Line">
            </li>
        </ul>
    </div>
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">Bir Projeniz Mi Var ?</h3>
                        <form id="contact-form" class="axil-contact-form">
                            {{ csrf_field() }}
                            @if ($errors->any())
                                @foreach ($errors->all as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label>Adınız</label>
                                <input type="text" class="form-control" id="contact-name">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" id="contact-email">
                            </div>
                            <div class="form-group mb--40">
                                <label>Size nasıl yardımcı olabilirim?</label>
                                <textarea name="contact-message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="contact-form-button"
                                    class="axil-btn btn-fill-primary btn-fluid btn-primary"
                                    name="submit-btn">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                        @php($telefon = $modules->where('slug', 'telefon')->toArray())
                        @php($telefon = array_shift($telefon))
                        <h4 class="title">{{ $telefon['title'] }}</h4>
                        <h4 class="phone-number"><a
                                href="tel:{{ $telefon['description'] }}">{{ $telefon['description'] }}</a></h4>
                    </div>
                    <div class="contact-info mb--30">
                        @php($email = $modules->where('slug', 'e-mail')->toArray())
                        @php($email = array_shift($email))
                        <h4 class="title">{{ $email['title'] }}</h4>
                        <h4 class="phone-number"><a
                                href="mailto:{{ $email['description'] }}">{{ $email['description'] }}</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-12">
            <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-2.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-1.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/circle-3.png') }}" alt="Circle">
            </li>
        </ul>
    </section>
@endsection

@push('customJs')
    <script>
        $(document).ready(function() {
            $("#contact-form-button").click(function() {

                var name = $("#contact-name").val();
                var email = $("#contact-email").val();
                var message = $("#contact-message").val();
                if (name.length > 0 && email.length > 0 && message.length > 0) {
                    Swal.fire({
                        title: 'İletiliyor...',
                        width: 600,
                        padding: '3em',
                        color: '#716add',
                        background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                        backdrop: `
                                rgba(0,0,123,0.4)
                                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                                left top
                                no-repeat
                            `,
                        showConfirmButton: false,

                    });
                    $.ajax({
                        type: "POST",
                        url: "{{ url('/sendMessage') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "name": $("#contact-name").val(),
                            "email": $("#contact-email").val(),
                            "message": $("#contact-message").val()
                        },

                        success: function(response) {
                            Swal.fire({
                                title: 'Mesajınız başarıyla iletildi.',
                                width: 600,
                                padding: '3em',
                                color: '#716add',
                                background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                                backdrop: `
                                rgba(0,0,123,0.4)
                                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                                left top
                                no-repeat
                            `,
                                showConfirmButton: false,
                                timer: 1500

                            });
                            console.log(response);
                        },

                        error: function(response) {
                            console.log("hata");
                            console.log(response);
                        }
                    })
                } else {
                    Swal.fire({
                        title: 'Lütfen boş alan bırakmayınız.',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                }

            });
        });
    </script>
@endpush

@push('customCss')
@endpush
