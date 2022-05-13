@extends("layouts.frontend")
@section("content")

 @include("frontend.include.banner")
 @include("frontend.include.project")
 @include("frontend.include.blog")

 @include("frontend.include.about")

 @include("frontend.include.testimonial")
 @include("frontend.include.action")

@endsection

@push("customJs")

@endpush

@push("customCss")

@endpush
