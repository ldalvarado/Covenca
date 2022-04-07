@extends('layouts.app')

@section('contenido')

<?php use App\Http\Controller\GuiaController;?>

    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Listado de guías</h4>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="btn-group">

                                    <a id="btnAddOrder" class="btn btn-primary btn-sm text-lg text-bold text-right"  href="{{ route('Guia.create') }}">
                                        <i class="fa fa-plus"></i>
                                        <span class="textoBoton">Crear</span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaGuias">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>


                                            <th class="text-white" style="text-align: center;"><strong>GUÍA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CANTIDAD</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>FECHA SALIDA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ORIGEN</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DESTINO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>

                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                        @foreach($Guias as $Guia)
                                        <tr>
                                            <td> {{$Guia->codigo}} </td>
                                            <td> {{$Guia->ListGuiaReclamo->count()}} </td>
                                            <td> <?= date('d/m/Y',strtotime($Guia->created_at)) ?> </td>
                                            <td> {{$Guia->sucursalOrigen->descripcion}} </td>
                                            <td> {{$Guia->sucursalDestino->descripcion}} </td>
                                            <td>
                                                <a class="btn btn-sm btn-info text-white" href="{{ route('Guia.show', ['Guium'=>$Guia->codigo]) }}">Ver</a>

                                            </td>
                                        </tr>
                                        @endforeach
                                     
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
     $(document).ready(function(){
        
        ActivateNavLink("nav-link_wg");

    });
    var table = $('#tablaGuias').DataTable({


'columnDefs': [
   {
       'targets': 0,

   }
],

});
</script>
@endsection