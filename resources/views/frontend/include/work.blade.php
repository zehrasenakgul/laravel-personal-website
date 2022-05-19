<section class="section  section-padding-equal pt_md--80 pt_sm--60">
    <div class="container">
        <div class="section-heading">
            <h2 class="title">Portfolyo</h2>
            <p class="subtitle">Portfolyomu incelemek için görsellere tıklamanız yeterlidir.</p>
        </div>
        <div class="axil-isotope-wrapper ">
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
        <ul class="shape-group-1 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-1.png') }}"
                    alt="bubble"></li>
            <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/line-1.png') }}" alt="bubble">
            </li>
            <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/line-2.png') }}" alt="bubble">
            </li>
            <li class="shape shape-4"><img src="{{ asset('assets/frontend/media/others/bubble-2.png') }}"
                    alt="bubble"></li>
        </ul>
    </div>
</section>
