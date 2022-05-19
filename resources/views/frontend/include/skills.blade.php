<div class="section section-padding bg-color-light" id="section2">
    <div class="container">
        <div class="section-heading heading-left">
            <h2 class="title">Becerilerim</h2>
        </div>
        <div class="row">
            @foreach ($skills as $skill)
                <div class="col-lg-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                    data-sal-delay="100">
                    <div class="services-grid service-style-2 active">
                        <div class="thumbnail">
                            <img src="{{ $skill->image_link }}" width="80" alt="{{ $skill->name }}">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="{{ $skill->url }}"
                                    target="_blank">{{ $skill->name }}</a>
                            </h5>
                            <a href="{{ $skill->url }}" target="_blank" class="more-btn">İncele</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <ul class="shape-group-6 list-unstyled">
            <li class="shape shape-1"><img src="{{asset("assets/frontend/media/others/line-4.png")}}" alt="Bubble"></li>
        </ul>
    </div>
</div>
