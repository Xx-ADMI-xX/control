@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Editar permisos</h2>

<form action="{{route('tipoI.update',$tipoI->tpI_id)}}" method="POST">
	@csrf
	<label>Detalle del ingreso</label>

	<br>
	<input type="text" value="{{$tipoI->tpI_Nombre}}" name="tpI_Nombre" id="car_detalle">
	<br>
	<br>
	<button class="btn btn-success"> Guardar </button>
</form>

@endsection