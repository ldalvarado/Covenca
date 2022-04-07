@extends('layouts.app')

@section('contenido')
  <div class="br-pagebody mg-t-5 pd-30">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card w-100">
          <div class="card-header pt-3 pb-3">
              <div class="row justify-content-center">
                  <div class="col align-self-center">
                      <h4 class=" text-bold text-center mb-0">Listado de Usuarios</h4>
                  </div>

              </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-12 text-center text-md-right mt-3 mb-3 pr-4">
                  <a class="btn btn-info text-white" href="{{ route('users.create') }}">+ Nuevo Usuario</a>
                </div>
              </div>

              <div class="p-2 table-responsive">
                <table class="table table-bordered table-striped" id="tablaGuias">
                  <thead class="text-center bg-dark text-white">
                      <tr>
                          <th class="text-white" style="text-align: center;"><strong>ITEM</strong></th>
                          <th class="text-white" style="text-align: center;"><strong>SUCURSAL</strong></th>
                          <th class="text-white" style="text-align: center;"><strong>ROLE</strong></th>
                          <th class="text-white" style="text-align: center;"><strong>NOMBRE</strong></th>
                          <th class="text-white" style="text-align: center;"><strong>EMAIL</strong></th>
                          <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                          <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                      </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->Sucursal->descripcion }}</td>
                        <td>
                          @if( $user->idRole == 0 )
                            <a class="text-danger">Asignar Role</a>
                          @endif
                          @if( $user->idRole == 1 )
                            Administrador
                          @endif
                          @if( $user->idRole == 2 )
                            Gestion de Garantías
                          @endif
                          @if( $user->idRole == 3 )
                            Analista de Crédito
                          @endif
                          @if( $user->idRole == 4 )
                            Analista Técnico
                          @endif
                          @if( $user->idRole == 5 )
                            Distribuidor Comercial
                          @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @if( $user->estado == 0 )
                            INACTIVO
                        @endif
                        @if( $user->estado == 1 )
                            ACTIVO
                        @endif
                        </td>
                        <td class="nonePrint">
                          <a class="btn btn-outline-info form-control-sm in" href="{{ route('users.edit',$user->id) }}">
                            <span class="d-none d-sm-inline">Editar</span>
                          </a>
                          @if( $user->estado == 1 )
                            {!! Form::open( ['url' => route('users.destroy', $user->id),'method' => 'POST', 'class' => 'd-inline-block'] ) !!}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="enable" value="0">
                                <button class="btn btn-danger form-control-sm in"  >
                                    <span class="d-none d-sm-inline">Inhabilitar</span>
                                </button>
                            {!! Form::close() !!}
                          @endif
                          @if( $user->estado == 0 )
                            {!! Form::open( ['url' => route('users.destroy', $user->id),'method' => 'POST', 'class' => 'd-inline-block'] ) !!}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="enable" value="1">
                                <button class="btn btn-danger form-control-sm in"  >
                                    <span class="d-none d-sm-inline">Habilitar</span>
                                </button>
                            {!! Form::close() !!}
                          @endif
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
var table = $('#tablaGuias').DataTable({


responsive: "true",
dom: "Bfrtilp",
buttons:[
    


],



});
</script>
@endsection