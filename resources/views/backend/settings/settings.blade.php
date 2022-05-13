@extends("layouts.backend")
@section('content')

    <div class="layout-px-spacing">
        <div class=" layout-top-spacing">
            <button class="btn btn-primary mb-2 mr-2" id="newSetting">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                Yeni Ekle</button>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-condensed mb-4">
                    <thead>
                        <tr id="settingTableHeader">
                            <th>Anahtar</th>
                            <th>Değer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input class="form-control settingInput" type="text" name="key"></td>
                            <td> <input class="form-control settingInput" type="text" name="value"></td>
                        </tr>
                        @foreach($settings as $setting)
                        <tr>
                            <td>{{$setting->key}}</td>
                            <td> <input class="form-control settingInput" type="text" value="{{$setting->value}}" name="{{$setting->key}}"></td>
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
    $(document).ready(function(){
        $(".settingInput").on("change",function(){
            var input = $(this);
            $.ajax({
                type : "POST",
                url  : "{{url('admin/settings/update')}}",
                data : {
                    _token : "{{csrf_token()}}",
                    key    : input.attr("name"),
                    value  : input.val()
             },
             
             success: function(response){
                 console.log("Başarılı");
                 console.log(response);
             },      
             
             error: function(response)
             {
                console.log("Hatalı");
                 console.log(response);
             }
             });
        });

        $("#newSetting").click(function(){
            var data = ""


            $("#settingTableHeader").after()

        });
    });
</script>
<script src="{{ asset('assets/backend/js/scrollspyNav.js') }}"></script>
@endpush

@push('customCss')
    <link href="{{ asset('assets/backend/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
@endpush
