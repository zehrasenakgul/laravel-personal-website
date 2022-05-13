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
                        @foreach($works as $work)
                        <tr>
                            <td>{{$work->title}}</td>
                            <td>{{$work->content}}</td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    <li><a href="{{url('admin/portfolio/update/'. $work->slug)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                    <li><a href="{{url('admin/portfolio/delete/'. $work->slug)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('customJs')
<script src="{{ asset('assets/backend/js/scrollspyNav.js') }}"></script>
@endpush

@push('customCss')
    <link href="{{ asset('assets/backend/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
@endpush
