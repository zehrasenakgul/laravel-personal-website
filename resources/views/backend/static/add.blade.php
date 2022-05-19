@extends("layouts.backend")
@section('content')

    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" enctype="multipart/form-data" action="{{ url('admin/statics/add') }}"
                method="POST">
                {{ csrf_field() }}
                @if ($errors->any())
                    @foreach ($errors->all as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif

                <div class="form-group mb-4">
                    <label class="control-label">Title:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Description:</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group mb-4">
                    <label class="control-label">Keywords</label>
                    <textarea class="form-control" name="keywords" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" name="submit" value="Ekle" class="btn btn-primary">

            </form>
        </div>
    </div>
@endsection

@push('customJs')
@endpush

@push('customCss')
@endpush
