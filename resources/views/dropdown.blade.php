<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <style>


 .select2-selection__rendered {
    line-height: 90px !important;
    width: 120px;
}
.select2-container .select2-selection--single {
    height: 90px !important;
    width: 120px;

}
.select2-selection__arrow {
    height: 90px !important;
    width: 120px;

}



/* #dropList1 + .select2-container--default .select2-selection--multiple{
  height: 100px;
} */

        </style>
</head>
<body>
    <h1>dropdown</h1>
    <form method="post" action="{{route('testtt')}}">
        @php
        $authuser = auth()->user();

        $users = App\Models\Appsetting::where('store_name', '=', $authuser->name)->first();
        @endphp

    @foreach (json_decode($users->chatopt) as $key => $value)

        @php
        $splitt =   $value->avatar;
            $optionval = explode("-",$splitt)[0];

        @endphp

        <select id="" class="cmbIdioma" name="dropdonw[]">

            <option value="whatsapp" {{ $optionval == 'whatsapp' ? 'selected' : ''}}  >Whatsapp</option>
            <option value="twitter" {{ $optionval == 'twitter' ? 'selected' : ''}}  >Twitter</option>
            <option value="facebook" {{ $optionval == 'facebook' ? 'selected' : ''}}>facebook</option>
        </select>
     @endforeach

<button type="submit" class="btn btn-primary">submit</button>
  </form>
<script>

    $(document).ready(function() {
        $(".cmbIdioma").select2({
            templateResult: function (idioma) {
                var image = "{{ asset('assets/img/')}}";
            var $span = $('<span><img height="30pg" width="30px" src="'+image+'/'+idioma.id+'.png"/>'+idioma.text+'</span>');
            return $span;
            },
            templateSelection: function (idioma) {
                var image = "{{ asset('assets/img/')}}";
            var $span = $('<span><img height="30pg" width="30px" src="'+image+'/'+idioma.id+'.png"/>'+idioma.text+'</span>');
            return $span;
            }
        });
    });
</script>
</body>
</html>
