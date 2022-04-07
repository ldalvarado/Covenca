@extends('layouts.app')

@section('contenido')
    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Listado de Garantías pendientes por Análisis Técnico</h4>
                            </div>

                        </div>

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaAnalisis">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>
                                            <th class="text-white" style="text-align: center;"><strong>FECHA DE RECEPCIÓN</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong># GARANTÍA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>SOLICITUD</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>PRODUCTO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DESCRIPCIÓN</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DISTRIBUIDOR COMERCIAL</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>RIF</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>FECHA DE LA SOLICITUD</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>FECHA DE GUÍA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>MEDIDA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>MARCA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>MODELO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DOT</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>RENOVADORA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>SERIAL / LOTE VULC</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>MOLDE / DISEÑO DE BANDA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>mm</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>BOLETA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CAUSA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CÓDIGO DE RECHAZO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DECISIÓN</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                        

                                            
                            @foreach($ListaAnalisis as $reclamo)

                            <tr>
                                <td> <?= date('d/m/Y',strtotime($reclamo->getRecepcionReclamo->created_at)) ?> </td>
                                <td> {{$reclamo->codigoSucursal}} </td>
                                <td> @if($reclamo->InfoProductoAnalisis != null)
                                    {{$reclamo->InfoProductoAnalisis->getProducto->descripcion}} 
                                    @else
                                    error
                                    @endif
                                </td>
                                <td> @if($reclamo->DocVenta != null) {{$reclamo->DocVenta->CodItem}} @endif </td>
                                <td> @if($reclamo->DocVenta != null) {{$reclamo->DocVenta->descripcion}} @endif </td>
                                <td> {{$reclamo->sucursal->descripcion}} </td>
                                <td> {{$reclamo->nombre}} </td>
                                <td> {{$reclamo->rif}} </td>
                                <td> <?= date('d/m/Y',strtotime($reclamo->created_at)) ?> </td>
                                <td> @if($reclamo->GuiaReclamo != null) <?= date('d/m/Y',strtotime($reclamo->GuiaReclamo->created_at)) ?> @endif </td>
                                <td>@if($reclamo->InfoProductoSucursal != null) 
                                    @if($reclamo->InfoProductoSucursal->medidaCaucho != null) 
                                    {{$reclamo->InfoProductoSucursal->medidaCaucho->descripcion}} 
                                    @endif 
                                    @else
                                    error
                                    @endif

                                </td>
                                <td>@if($reclamo->InfoProductoSucursal != null) 
                                     @if($reclamo->InfoProductoSucursal->marcaCaucho != null) 
                                    {{$reclamo->InfoProductoSucursal->marcaCaucho->descripcion}}
                                     @endif 
                                     @else error
                                        @endif
                                </td>
                                <td> @if($reclamo->InfoProductoSucursal != null) 
                                    @if($reclamo->InfoProductoSucursal->modelCaucho != null)
                                     {{$reclamo->InfoProductoSucursal->modelCaucho->descripcion}}
                                      @endif 
                                      else
                                      error
                                      @endif
                                    </td>
                                <td> @if($reclamo->InfoProductoSucursal != null) 
                                    {{$reclamo->InfoProductoSucursal->dotSerial}}
                                    @else
                                        error
                                    @endif </td>
                                <td>  </td>
                                <td>@if($reclamo->InfoProductoSucursal != null)  
                                     {{$reclamo->InfoProductoSucursal->serial}} 
                                    @else
                                    error
                                    @endif
                                    </td>

                                <td>@if($reclamo->InfoProductoSucursal != null)  
                                    @if($reclamo->InfoProductoSucursal->Diseno != null) 
                                    {{$reclamo->InfoProductoSucursal->Diseno->descripcion}}
                                    @endif 
                                    @else
                                    error
                                    @endif
                                </td>
                                <td>  </td>
                                <td> @if($reclamo->InfoProductoSucursal != null) 
                                    {{$reclamo->InfoProductoSucursal->boleta}}
                                    @else
                                    error
                                    @endif
                                </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>


                                <td>
                                    <a class="btn btn-info btn-sm text-lg text-bold text-right"  href="{{ route('warranty.show', $reclamo->id)}}">
    
                                    <i class="fas fa-eye"></i>
    
                                    </a>
                                    <a class="btn btn-primary btn-sm text-lg text-bold text-right" href="{{ route('Analisis.show', $reclamo->id)}}">

                                        <i class="fas fa-file-signature"></i>

                                    </a>

                                </td>
                            </tr>
                            @endforeach

                                        <!--
                                        @foreach($ListaAnalisis as $Guia)
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
            <div class="col-12 col-md-12 mt-4">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Listado de Análisis realizados</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaAnalisisRealizados">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>

                                        <th class="text-white" style="text-align: center;"><strong>FECHA DE ANALISIS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>PRODUCTO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTADO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                            
                                    @foreach($analisisListos as $reclamo)


                                    <tr>
                                        <td> <?= date('d/m/Y',strtotime($reclamo->getRecepcionReclamo->updated_at)) ?> </td>
                                        <td> {{$reclamo->codigoSucursal}} </td>
                                        <td> {{$reclamo->nombre}} </td>
                                        <td> {{$reclamo->InfoProductoAnalisis->getProducto->descripcion}} </td>
                                        <td> {{$reclamo->ListEstadosReclamo->last()->getEstado->descripcion}}  </td>
                                        <td>
                                            <a class="btn btn-info btn-sm text-lg text-bold text-right"  href="{{ route('warranty.show', $reclamo->id)}}">
                                    
                                                <i class="fas fa-eye"></i>
                                                <span class="textoBoton">Ver</span>
                                            </a>
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
        
        ActivateNavLink("nav-link_wa");

    });
        var table = $('#tablaAnalisisRealizados').DataTable({

            responsive: "true",
            dom: "Bfrtilp",
            buttons:[
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a excel',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info'
                }
            ],
            "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            },

        ],

        });
        var table2 = $('#tablaAnalisis').DataTable({

responsive: "true",
dom: "Bfrtilp",
buttons:[
    {
        extend: 'excelHtml5',
        text: '<i class="fas fa-file-excel"></i>',
        titleAttr: 'Exportar a excel',
        className: 'btn btn-success',
        title: 'Garantía',
        exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ]
                }
    },
    {
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i>',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger',
        title: 'Garantía',
        exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ]
                }
    },
    {
        extend: 'print',
        text: '<i class="fa fa-print"></i>',
        titleAttr: 'Imprimir',
        className: 'btn btn-info',
        title: 'Analisis',
        exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ]
                }
    }
],
"columnDefs": [
            {
                "targets": [ 3,4,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22 ],
                "visible": false,
                "searchable": false
            },
        ],

});
</script>
@endsection