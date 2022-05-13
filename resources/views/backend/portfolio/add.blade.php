@extends("layouts.backend")
@section('content')

    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" enctype="multipart/form-data" action="{{ url('admin/portfolio/add') }}" method="POST">
                {{ csrf_field() }}
                @if ($errors->any())
                    @foreach ($errors->all as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif

                <div class="form-group mb-4">
                    <label class="control-label">Proje İsmi:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Website Url:</label>
                    <input type="text" name="content" placeholder="https://" class="form-control" required>
                </div>
                <div class="form-group custom-file-container mb-4" data-upload-id="myFirstImage">
                    <label class="control-label">Görsel Seçimi (Tek Dosya)</label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input"
                            accept="image/*">
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                </div>
                <input type="submit" name="submit" value="Ekle" class="btn btn-primary">

            </form>
        </div>
    </div>
@endsection

@push('customJs')
@endpush

@push('customCss')
    <script src="{{ asset('assets/backend/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script>
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
    <link href="{{ asset('assets/backend/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
