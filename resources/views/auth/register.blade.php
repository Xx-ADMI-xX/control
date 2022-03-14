@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="usu_Nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                            <div class="col-md-6">
                                <input id="usu_Nombre" type="text" class="form-control @error('usu_Nombre') is-invalid @enderror" name="usu_Nombre" value="{{ old('usu_Nombre') }}" required autocomplete="usu_Nombre" autofocus>

                                @error('usu_Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="usu_Apellido" class="col-md-4 col-form-label text-md-right">Apellido:</label>

                            <div class="col-md-6">
                                <input id="usu_Apellido" type="usu_Apellido" class="form-control @error('usu_Apellido') is-invalid @enderror" name="usu_Apellido" value="{{ old('usu_Apellido') }}" required autocomplete="usu_Apellido">

                                @error('usu_Apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usu_Correo" class="col-md-4 col-form-label text-md-right">Correo:</label>

                            <div class="col-md-6">
                                <input id="usu_Correo" type="email" class="form-control @error('usu_Correo') is-invalid @enderror" name="usu_Correo" value="{{ old('usu_Correo') }}" required autocomplete="usu_Correo">

                                @error('usu_Correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="usu_CI" class="col-md-4 col-form-label text-md-right">CI:</label>

                            <div class="col-md-6">
                                <input id="usu_CI" type="usu_CI" class="form-control @error('usu_CI') is-invalid @enderror" name="usu_CI" value="{{ old('usu_CI') }}" required autocomplete="usu_CI">

                                @error('usu_CI')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
