@extends('layouts.backend')
@section('content')
    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" action="{{ url('admin/skills/update/' . $skill->slug) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group mb-4">
                    <label class="control-label">Resim Yolu:</label>
                    <input type="text" name="image_link" value="{{ $skill->image_link }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Name:</label>
                    <input type="text" name="name" value="{{ $skill->name }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Url:</label>
                    <input type="text" name="url" value="{{ $skill->url }}" class="form-control">
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
