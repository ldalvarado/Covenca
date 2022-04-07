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
                <h3 class="tx-uppercase tx-bold text-center mb-0">Editar Usuario</h3>
              </div>

            </div>
          </div>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="card-body">
            
            {!! 
            Form::open( ['url' => route('users.updateUser', $user),'method' => 'PATCH', 'class' => 'col-12'] ) !!}
            @csrf
            <div id="" class="">
              <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10">
               
                <div class="row pd-y-20 pd-md-y-0">
                    <div class="col-md-4">
                      {!! Form::label('name', 'Nombre:', ['class' => 'col-form-label text-lg-left']) !!}
                      {{ Form::text("name", $user->name, ["id" => "name",  "class" => "form-control".( $errors->has('name') ? ' is-invalid' : ''), ] ) }}
                    </div>
                    <div class="col-md-8">
                      {!! Form::label('email', 'Correo Electrónico', ['class' => 'col-form-label text-lg-left']) !!}
                      {{ Form::text("email", $user->email, ["id" => "email",  "class" => "form-control".( $errors->has('email') ? ' is-invalid' : '') ] ) }}
                    </div>
                    @if( $principal == 1 )
                      <div class="col-md-4">
                        {!! Form::label('idRole', "Roles:", ['class' => 'col-form-label text-lg-left']) !!}
                        {{ Form::select('idRole', $roles, $user->idRole, ["id" => "idRole", "placeholder" => 'Seleccione', 'class' => 'form-control'.($errors->has('idRole') ? ' is-invalid' : '')]) }}
                      </div>
                      <div class="col-md-8">
                      {!! Form::label('idSucursal', "Sucursales:", ['class' => 'col-form-label text-lg-left']) !!}
                      {{ Form::select('idSucursal', $sucursales, $user->idSucursal, ["id" => "idSucursal", "placeholder" => 'Seleccione', 'class' => 'form-control'.($errors->has('idSucursal') ? ' is-invalid' : '')]) }}
                    </div>
                    @endif
                    @if( $principal == 0)
                      <div class="col-md-4">
                        <input type="hidden" name="idRole" value="5">
                        {!! Form::label('idRole1', 'Role:', ['class' => 'col-form-label text-lg-left']) !!}
                        {{ Form::text("idRole1", old('idRole1'), ["id" => "idRole1", "placeholder" => 'Distribuidor Comercial', "class" => "form-control".( $errors->has('idRole1') ? ' is-invalid' : ''),"readonly","autofocus" ] ) }}
                      </div>
                      <div class="col-md-8">
                        {!! Form::label('idSucursal', "Sucursal:", ['class' => 'col-form-label text-lg-left']) !!}
                        {{ Form::text("idRole11", $sucursal->descripcion, ["id" => "idRole11", "class" => "form-control".( $errors->has('idRole1') ? ' is-invalid' : ''),"readonly","autofocus" ] ) }}
                        {{ Form::hidden("idSucursal", $sucursal->id, ["id" => "idSucursal", "class" => "form-control".( $errors->has('idSucursal') ? ' is-invalid' : '') ] ) }}
                      </div>
                    @endif
                    <div class="col-md-4">
                      <label for="password" class="col-form-label text-lg-left">Contraseña Actual:</label>
                      <input id="passwordOld" type="password" class="form-control @error('passwordOld') is-invalid @enderror" name="passwordOld" placeholder="Contraseña Actual">
                    </div>
                    <div class="col-md-4">
                      <label for="password" class="col-form-label text-lg-left">Nueva Contraseña:</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Nueva Contraseña">
                    </div>
                    <div class="col-md-4">
                      <label class="col-form-label text-lg-left">Confirmar Contraseña:</label>
                      <input type="password" class="form-control @error('password_confirmation')is-invalid @enderror" name="password_confirmation" placeholder="Confirmar Contraseña">
                    </div>

                </div>
              </div>
            </div>                <!--row-->
           </div><!--d-flex--> 
                
              <div class="col-12 mt-5 mb-3">
                <div class="row justify-content-center">
                  <div class="col-md-2">
                    <button class="btn btn-primary btn-block" type="submit">
                      Guardar
                    </button>
                  </div>
                  <div class="col-md-2">
                    <a class="btn btn-danger btn-block" href="{{ route('dashboard') }}">
                      Cancelar
                    </a>
                  </div>
                </div>
              </div>
              </div>
            {!! Form::close() !!}
          </div><!--cardbody-->
        
        </div><!-- card w-100 -->
      </div><!-- col-12 -->
    </div><!--row-->
  </div>

</div><!--pagebody-->
@endsection