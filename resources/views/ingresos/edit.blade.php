@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Editar ingresos</h2>

<form action="{{route('ingresos.update',$ingresos->ing_id)}}" method="POST">
	@csrf
	<label>Detalle del ingreso</label>
	<br>

	<label for="">Cantidad</label>
	<br>
	<input type="text" value="{{$ingresos->ing_cantidad}}" name="ing_cantidad" id="ing_cantidad">
	<br>
	<label for="">Detalle</label>
	<br>
	<input type="text" value="{{$ingresos->ing_detalle}}" name="ing_detalle" id="ing_detalle">
	<br>
	<label for="">Fecha</label>
	<br>
	<input type="date" value="{{$ingresos->ing_fecha}}" name="ing_fecha" id="ing_fecha">
	<br>
	<button class="btn btn-success"> Guardar </button>
</form>

@endsection