@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Editar permisos</h2>

<form action="{{route('permisos.update',$permisos->prm_id)}}" method="POST">
	@csrf
	<label>Detalle del Permiso</label>

	<br>
	<input type="text" value="{{$permisos->prm_detalle}}" name="prm_detalle" id="car_detalle">
	<br>
	<br>
	<button class="btn btn-success"> Guardar </button>
</form>

@endsection