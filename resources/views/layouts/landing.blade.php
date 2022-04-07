<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Covenca</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('/favicon.png') }}">
        <!-- vendor css -->
        <link href="{{asset('/template/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
        
        <!-- Bracket CSS -->
        <link rel="stylesheet" href="{{asset('/template/css/bracket.css')}}">
        <link rel="stylesheet" href="{{asset('/template/lib/datatables/dataTables.checkboxes.css')}}">

        
        <!-- Scripts
        <script src="{{asset('js/app.js') }}" defer></script>
     -->

        <script src="{{asset('/template/lib/popper.js/popper.js')}}"></script>
        <script src="{{asset('/template/lib/jquery/jquery.js')}}"></script>
        <script src="{{asset('/template/lib/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('/template/lib/datatables/datatables.js')}}"></script>
        <script src="{{asset('/template/lib/datatables/dataTables.checkboxes.js')}}"></script>
        <script src="{{asset('/template/lib/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{asset('/template/lib/parsleyjs/parsley.js')}}"></script>
        <script src="{{asset('/template/lib/parsleyjs/es.js')}}"></script>
       
        <!-- Styles -->
        <style>
            body {
                background-image: url("{{asset ('/ui/assets/images/background/login-register.jpg')}}");
                background-attachment: fixed;
                background-size: cover;
                background-position: center center;
                font-family: 'Nunito', sans-serif;
            }
            .full-height {
                height: 85vh;
            }
        </style>

    </head>
    
    <body>
        <div class="d-flex align-items-center justify-content-center mt-4">
            <img src="{{asset ('/ui/assets/images/dobermann-logoWeb.png')}}">
        </div>
        <div class="d-flex align-items-center justify-content-center full-height">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
                @yield('contenido')
            </div>
        </div
    </body>
</html>
