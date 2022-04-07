@extends('layouts.landing')

@section('contenido')
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <a id="" class="  " href="{{route('welcome')}}"  ><i class="fa fa-arrow-left"></i> Regresar</a>

            </div>
            <div style="height:1.5rem"></div>
            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-info btn-block">
                    {{ __('Enviar Correo de Verificacion') }}
                </button>
            </div>


        </form>
@endsection