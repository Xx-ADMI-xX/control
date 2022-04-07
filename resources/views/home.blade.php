@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div align="center" style="color:red"><b>{{ __('¡ BIENVENIDO !') }}</b></div>
                    <div>USUARIO: {{ Auth::user()->usu_Nombre}}</div>
                </div>

                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <img src="https://i.pinimg.com/originals/b9/7d/c2/b97dc288d71e7938c1ce8b7faacdc9ac.gif" height="418" width="500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
