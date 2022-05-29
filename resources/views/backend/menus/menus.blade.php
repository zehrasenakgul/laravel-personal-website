@extends('layouts.backend')
@section('content')
    <div class="layout-px-spacing">
        <div class=" layout-top-spacing">
            <button class="btn btn-warning mb-2 mr-2" id="newmenu">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Yeni Ekle</button>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-condensed mb-4">
                    <thead>
                        <tr id="menuTableHeader">
                            <th>Menü</th>
                            <th>Url</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->name }}</td>
                                <td> <input class="form-control menuInput" type="text" name="{{ $menu->name }}"
                                        value="{{ $menu->route }}"></td>
                                <td><button class="btn btn-danger menuDelete" data-name="{{ $menu->name }}">Sil</button>
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
    <script>
        $(document).ready(function() {
            $(".menuInput").on("change", function() {
                var input = $(this);
                $.ajax({
                    type: "POST",
                    url: "{{ url('admin/menus/update') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: input.attr("name"),
                        route: input.val()
                    },

                    success: function(response) {

                        console.log("Başarılı");
                        console.log(response);
                    },

                    error: function(response) {
                        console.log("Hatalı");
                        console.log(response);
                    }
                });
            });

            $("#newmenu").click(function() {

                var data = "<tr>\n" +
                    "<td> <input class=\"form-control\" type=\"text\" name=\"name\" id='newmenuname'></td>" +
                    "<td> <input class=\"form-control\" type=\"text\" name=\"route\" id='newmenuroute'></td>" +
                    "</tr>";

                $("#menuTableHeader").after(data);
            });

            var name = false;
            var route = false;

            $(document).on("change", "#newmenuname", function() {
                if ($(this).val().length > 3 && $("#newmenuroute").val().length > 3) {
                    newmenu()
                }
            });
            $(document).on("change", "#newmenuroute", function() {
                if ($(this).val().length > 3 && $("#newmenuname").val().length > 3) {
                    newmenu()
                }
            });


            function newmenu() {
                var name = $("#newmenuname").val();
                var route = $("#newmenuroute").val();
                $.ajax({
                    type: "post",
                    url: "{{ url('admin/menus/add') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: name,
                        route: route
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            location.reload();
                        }
                        console.log(response);
                    },
                    error: function(response) {
                        console.log(response);
                    }


                })
            };

            $(".menuDelete").click(function() {
                var button = $(this);
                $.ajax({
                    type: "post",
                    url: "{{ url('admin/menus/delete') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: button.data("name")
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            button.closest("tr").remove();
                            location.reload();
                        }
                        console.log(response);
                    },
                    error: function(response) {
                        console.log(response);
                    }

                });
            });
        });
    </script>
    <script src="{{ asset('assets/backend/js/scrollspyNav.js') }}"></script>
@endpush

@push('customCss')
    <link href="{{ asset('assets/backend/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
@endpush
