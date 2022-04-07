@extends('layouts.app')

@section('contenido')

<div class="br-pagebody mg-t-5 pd-15">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">

                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                @if(!isset($eje))
                                    <h3 class="tx-uppercase tx-bold text-center mb-0">Nuevo Eje de Vehiculo</h3>
                                    @else
                                    <h3 class="tx-uppercase tx-bold text-center mb-0">Modificar Eje de Vehiculo</h3>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="br-section-wrapper pd-30-force">

                            @if(!isset($eje))
                                <form action="{{url('/EjeVehiculo')}}" method="POST" class="parsley-style-1">
                                @else
                                <form action="{{route('EjeVehiculo.update', $eje)}}" method="POST" class="parsley-style-1">
                                @method('put')
                            @endif
                                @csrf
                                <div class="form-layout form-layout-1">
                                    <div class="d-flex align-items-center justify-content-start bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Buscar-->
                                        <div class="row wd-100v pd-y-20 pd-md-y-0">
                                            <div class="col-md-4"><!--Nro Factura-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Descripción<span class="tx-danger">*</span></label>
                                                    @if(!isset($eje))
                                                        <input class="form-control" type="text" name="descripcion">
                                                        @else
                                                        <input class="form-control" type="text" name="descripcion" value="{{$eje->descripcion}}">
                                                    @endif
                                                </div>
                                            </div><!-- col-5 -->

                                            <div class="col-md-4"><!--RIF/Cedula-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Activo<span class="tx-danger">*</span></label>
                                                    @if(!isset($eje))
                                                        <input class="form-control" type="text" name="activo">
                                                        @else
                                                        <input class="form-control" type="text" name="activo" value="{{$eje->activo}}">
                                                    @endif
                                                </div>
                                            </div><!-- col-5 -->

                                            <div class="col-md-2"><!--Btn Guardar-->
                                                <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                                                    <button class="btn btn-info p-2 bd-0 tx-spacing-2" type="submit">
                                                            <i class="fa fa-save"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-2"><!--Btn Atras-->
                                                <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                                                    <a class="btn btn-info" href="{{route('EjeVehiculo.index')}}">Atras</a>
                                                </div>
                                            </div>
                                           
                                        </div><!--row-->
                                    </div><!-- d-flex -->

                                </div><!-- form-layout -->
                            </form>
                        </div> <!--br-section-wrapper-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection