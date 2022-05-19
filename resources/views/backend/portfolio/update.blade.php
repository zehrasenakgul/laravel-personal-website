@extends("layouts.backend")
@section('content')
    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" enctype="multipart/form-data"  action="{{ url('admin/portfolio/update/' . $work->slug) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group mb-4">
                    <label class="control-label">Proje İsmi:</label>
                    <input type="text" name="title" value="{{ $work->title }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Website Url:</label>
                    <input type="text" name="content" value="{{ $work->content }}" value="https://" class="form-control">
                </div>
                <div class="form-group custom-file-container mb-4" data-upload-id="myFirstImage">
                    <label class="control-label">Görsel Seçimi (Tek Dosya)</label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input"
                            accept="image/*">
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="card component-card_2 mt-3" style="width:400px">
                        <img src="{{ asset('uploads/' . $work->image) }}" class="card-img-top" alt="widget-card-2">
                    </div>
                </div>

                <input type="submit" name="submit" value="Güncelle" class="btn btn-primary">

            </form>
        </div>
    </div>
@endsection

@push('customJs')
    <script src="{{ asset('assets/backend/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script>
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
@endpush

@push('customCss')
    <link href="{{ asset('assets/backend/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
