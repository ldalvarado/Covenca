@extends('layouts.landing')

@section('contenido')

    <div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">
                <h2>
                    <strong class="font-weight-bold">Covenca</strong>
                </h2>
            </div>

            <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Introduzca su correo" required autofocus>
            </div><!-- form-group -->
            
            <div class="form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Introdruzca su contraseña" required autofocus>
            </div><!-- form-group -->
                
            <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-y-10">¿Olvidó la contraseña?</a>
            <!--<a href="" class="tx-info tx-12 d-block mg-y-10">Registrarse</a>-->

            <button type="submit" class="btn btn-info btn-block">ENTRAR</button>
        </form>
    </div>
@endsection