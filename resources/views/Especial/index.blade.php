@extends('layouts.app')

@section('contenido')
    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Garantías pendientes por crédito</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaCredito">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>
                                        <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>FACTURA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                            
                                    @foreach($ListaCredito as $Gar)

                                    <tr>
                                        <td> {{$Gar->codigoSucursal}} </td>
                                        <td> {{$Gar->nombre}} </td>
                                        <td> {{$Gar->factura}} </td>
                                        <td> {{$Gar->estadoReclamo->first()->getEstado->descripcion}}  </td>
                                        <td>
                                                        <a id="btnAddOrder" class="btn btn-primary btn-sm text-lg text-bold text-right" href="{{ route('Especial.show', $Gar->id)}}">
                                                        
                                                            <span class="textoBoton">Apelar</span>
                                                        </a>
                                                    </td>
                                    </tr>
                                    @endforeach

                                        <!--
                                        @foreach($ListaCredito as $Guia)
                                        <tr>
                                            <td> {{$Guia->codigo}} </td>
                                            <td> {{$Guia->cliente}} </td>
                                            <td> {{$Guia->factura}} </td>
                                            <td> {{$Guia->estatus}} </td>
                                            <td>
                                                <a class="btn btn-info">Editar</a>
                                                <button class="btn btn-danger" >Borrar</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        -->
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
        
        ActivateNavLink("nav-link_we");

    });
        var table = $('#tablaCredito').DataTable({

select: 'multi',
/*
'columnDefs': [
   {
       'targets': 0,
       'checkboxes': {
           'selectRow': true,
           'selectCallback': function (nodes, selected) {
               $('input[type="checkbox"]', nodes).iCheck('update');
           },
           'selectAllCallback': function (nodes, selected, indeterminate) {
               $('input[type="checkbox"]', nodes).iCheck('update');
           }
       }
   }
],*/

select: {
style:    'os',
selector: 'td:first-child'
},

});
</script>
@endsection