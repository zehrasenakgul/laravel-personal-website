<section class="section section-padding-equal pt_md--80 pt_sm--60">
    <div class="container">
        <div class="section-heading heading-left">
            <span class="subtitle">Portfolyomu incelemek için görsellere tıklamanız yeterlidir.</span>
            <h2 class="title" >Portfolyo</h2>
        </div>
        <div class="axil-isotope-wrapper">
            <div class="row isotope-list">
                @foreach($works as $work)
                <div class="col-xl-4 col-md-6 project branding">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="portfolyo/{{$work->slug}}">
                                <img src="{{asset("uploads/".$work->image)}}" alt="{{$work->title}}">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="portfolyo/{{$work->slug}}">{{$work->title}}</a></h4>
                            <span class="subtitle">{{$work->content}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

