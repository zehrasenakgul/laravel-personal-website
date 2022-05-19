@extends("layouts.backend")
@section('content')
    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" action="{{ url('admin/statics/update/' . $page->slug) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group mb-4">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" value="{{ $page->title }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Name:</label>
                    <input type="text" name="name" value="{{ $page->name }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Description:</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                        rows="3">{{ $page->description }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Keywords</label>
                    <textarea class="form-control" name="keywords" id="exampleFormControlTextarea1"
                        rows="3">{{ $page->keywords }}</textarea>
                </div>

                <input type="submit" name="submit" value="Güncelle" class="btn btn-primary">

            </form>
        </div>
    </div>
@endsection

@push('customJs')
@endpush

@push('customCss')
    <link href="{{ asset('assets/backend/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
