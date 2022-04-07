@extends('layouts.app')

@section('contenido')
    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Listado de Garantías</h4>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="btn-group">
                                    <a id="btnAddOrder" class="btn btn-primary btn-lg text-lg text-bold text-right" href="warranty/create">
                                        <i class="fa fa-plus">
                                            <span class="textoBoton">Garantía</span>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tableAnchos">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>
                                            <th class="text-white" style="text-align: center;"><strong>FECHA DE CREACIÓN</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>SUCURSAL</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>PRODUCTO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                        @foreach($reclamos as $reclamo)
                                        <tr>
                                            <td> <?= date('d/m/Y',strtotime($reclamo->created_at)) ?> </td>
                                            <td> {{$reclamo->codigoSucursal}} </td>
                                            <td> {{$reclamo->sucursal->descripcion}} </td>
                                            <td> {{$reclamo->nombre}} </td>
                                            <td> {{$reclamo->InfoProductoAnalisis->getProducto->descripcion}} </td>
                                            <td> {{$reclamo->estadoReclamo->first()->getEstado->descripcion}} </td>
                                            <td>
                                            <a id="btnAddOrder" class="btn btn-info btn-sm text-lg text-bold text-right"  href="{{ route('warranty.show', $reclamo->id)}}">

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
@include('layouts.alerts');

@endsection