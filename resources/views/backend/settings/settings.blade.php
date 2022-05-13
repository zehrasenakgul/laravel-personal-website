@extends("layouts.backend")
@section('content')
    <div class="layout-px-spacing">
        <div class=" layout-top-spacing">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-condensed mb-4">
                    <thead>
                        <tr>
                            <th>Proje İsmi</th>
                            <th>Website Url</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('customJs')
@endpush

@push('customCss')
    <script src="{{ asset('assets/backend/js/scrollspyNav.js') }}"></script>
    <link href="{{ asset('assets/backend/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
@endpush
