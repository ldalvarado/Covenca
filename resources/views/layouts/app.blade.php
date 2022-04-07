<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="shortcut icon" sizes="192x192" href="{{asset('/favicon.png')}}">

        <!-- Bracket CSS -->
        <link rel="stylesheet" href="{{asset('/css/estilos.css')}}">

        <!-- vendor css -->
        <link href="{{asset('/template/lib/loading/jquery.loadingModal.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/fontawesome-free/css/all.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/highlightjs/github.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/select2/css/select2.min.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/jquery.steps/jquery.steps.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/datatables/dataTables.min.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/datatables/dataTables.checkboxes.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/icheck/skins/all.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/toastr/toastr.min.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
        <link href="{{asset('/template/css/bracket.css')}}" rel="stylesheet">
        <link href="{{asset('/template/lib/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

 
<style>

.elevation-3 {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23) !important;
}
</style>
        <script src="{{asset('/template/lib/jquery/jquery.js')}}"></script>
        <script src="{{asset('/template/lib/popper.js/popper.js')}}"></script>
        <script src="{{asset('/template/lib/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('/template/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
        <script src="{{asset('/template/lib/moment/moment.js')}}"></script>
        <script src="{{asset('/template/lib/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{asset('/template/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
        <script src="{{asset('/template/lib/highlightjs/highlight.pack.js')}}"></script>
        <script src="{{asset('/template/lib/jquery.steps/jquery.steps.js')}}"></script>
        <script src="{{asset('/template/lib/parsleyjs/parsley.js')}}"></script>
        <script src="{{asset('/template/lib/parsleyjs/es.js')}}"></script>
        <script src="{{asset('/template/lib/datatables/datatables.js')}}"></script>
        <script src="{{asset('/template/lib/datatables/dataTables.checkboxes.js')}}"></script>
        <script src="{{asset('/template/lib/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('/template/lib/sweetalert2/sweetalert2.min.js')}}"></script>

 <script type="text/javascript" src="{{asset('/template/lib/JSZip-2.5.0/jszip.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('/template/lib/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('/template/lib/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
 <script type="text/javascript" src="{{asset('/template/lib/Buttons-2.0.1/js/dataTables.buttons.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('/template/lib/Buttons-2.0.1/js/buttons.html5.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('/template/lib/Buttons-2.0.1/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('/template/lib/jquery-toggles/toggles.min.js')}}"></script>
        <script src="{{asset('/template/lib/jt.timepicker/jquery.timepicker.js')}}"></script>
        <script src="{{asset('/template/lib/spectrum/spectrum.js')}}"></script>
        <script src="{{asset('/template/lib/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
        <script src="{{asset('/template/lib/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
        <script src="{{asset('/template/lib/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
        <script src="{{asset('/template/lib/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('/template/lib/jquery-validation/additional-methods.min.js')}}"></script>
        <script src="{{asset('/template/lib/loading/jquery.loadingModal.js')}}"></script>
        <script src="{{asset('/template/lib/chartist/chartist.js')}}"></script>
        <script src="{{asset('/template/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>

        <script src="{{asset('/template/lib/d3/d3.js')}}"></script>

        <script src="{{asset('/template/lib/rickshaw/rickshaw.min.js')}}"></script>

     
  
    
  
  
       <script>
                         var lang = {

"sProcessing": "Procesando...",
"sLengthMenu": "Mostrar _MENU_ registros",
"sZeroRecords": "No se encontraron resultados",
"sEmptyTable": "Ningún dato disponible en esta tabla",
"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
"sInfoPostFix": "",
"sSearch": "Buscar:",
"sUrl": "",
"sInfoThousands": ",",
"sLoadingRecords": "Cargando...",
"oPaginate": {
    "sFirst": "Primero",
    "sLast": "Último",
    "sNext": "Siguiente",
    "sPrevious": "Anterior"
},
"oAria": {
    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
}
}
var Toast = swal.mixin({
        toast: true,
        showConfirmButton: false,
        timer: 3000
    })
$(document).on('ajaxStart', function () {

loading_show();
});

$(document).on('ajaxStop', function (start) {
loading_hide();
});

function loading_show() {
$('body').loadingModal({
    text: 'Por favor espere',
    animation: 'circle',
});
$('body').loadingModal('show');
}

function loading_hide() {
$('body').loadingModal('hide');
}
       </script>
    </head>
    
    <body class="font-sans antialiased">

        <div>
            @include('layouts.header')
            @include('layouts.footer')
                <main>
                    <!--------------- sidebar ----------------->
                    <nav>
                        @include('layouts.sidebar')
                    </nav>

                    <div class="br-mainpanel">
                            @yield('contenido')
                    </div>
                </main>
        </div>
        
        <script src="{{asset('/template/lib/jquery-toggles/toggles.min.js')}}"></script>
        <script src="{{asset('/template/lib/jt.timepicker/jquery.timepicker.js')}}"></script>
        <script src="{{asset('/template/lib/spectrum/spectrum.js')}}"></script>
        <script src="{{asset('/template/lib/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
        <script src="{{asset('/template/lib/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
        <script src="{{asset('/template/lib/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
        <script src="{{asset('/template/lib/icheck/icheck.js')}}"></script>
        <script src="{{asset('/template/js/bracket.js')}}"></script>
        <script src="{{asset('/template/lib/peity/jquery.peity.js')}}"></script>
     
        <script>
        $(function () {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

 

        });
        $('input[type=checkbox]').iCheck({
            checkboxClass: 'icheckbox_square-blue',
        });
        </script>


    </body>
</html>
