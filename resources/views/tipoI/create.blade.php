@extends('layouts.app')
@section('content')
<h1 class="bg-dark text-white">Formulario tipo de ingreso</h1>
<form action="{{route('tipoI.store')}}" method="POST">
	@csrf
	<label>Detalle del tipo de ingreso</label>
	<br>
	<input type="text" name="tpI_Nombre" id="car_detalle">
	<br>
	<br>
	<button class="btn btn-success"> Guardar </button>
</form>
@endsection