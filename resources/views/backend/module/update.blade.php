@extends("layouts.backend")
@section('content')
    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" action="{{ url('admin/modules/update/' . $module->slug) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group mb-4">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" value="{{ $module->title }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Sayfa</label>
                    <select class="form-control" name="page_id" id="exampleFormControlSelect1">
                        @foreach ($pages as $page)
                            <option value="{{ $page->id }}" @if ($page->id == $module->page_id) selected @endif>
                                {{ $page->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Description:</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                        rows="3">{{ $module->description }}</textarea>
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
