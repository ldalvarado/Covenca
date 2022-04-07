@extends('layouts.app')

@section('contenido')
<div class="br-pagebody mg-t-5 pd-30">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card w-100">
                <div class="card-header pt-3 pb-3">
                    <div class="row justify-content-center">
                        <div class="col align-self-center">
                            <h4 class=" text-bold text-center mb-0">Listado de Ejes</h4>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="btn-group">
                                <a id="btnAddOrder" class="btn btn-primary btn-lg text-lg text-bold text-right" href="EjeVehiculo/create">
                                    <i class="fa fa-plus">
                                        <span class="textoBoton">Ejes</span>
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
                                            <th class="text-white" style="text-align: center;"><strong>ID</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>Descripcion</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                        @foreach($ejes as $eje)
                                        <tr>
                                            <td> {{$eje->id}} </td>
                                            <td> {{$eje->descripcion}} </td>
                                            <td>
                                                <a class="btn btn-info" href="{{route('EjeVehiculo.edit', $eje)}}">Editar</a>
                                                <form action="{{route('EjeVehiculo.destroy', $eje)}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                                </form>
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
</div>

@endsection