@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Editar ingresos</h2>

<form action="{{route('ingresos.update',$ingresos->ing_id)}}" method="POST">
	@csrf
	<label>Detalle del ingreso</label>
	<br>

	<label for="">Cantidad</label>
	<input type="text" value="{{$ingresos->ing_cantidad}}" name="ing_cantidad" id="ing_cantidad">
	<br>
	<br>
	<label for="">Detalle</label>
	<input type="text" value="{{$ingresos->ing_detalle}}" name="ing_detalle" id="ing_detalle">
	<br>
	<br>
	<label for="">Fecha</label>
	<input type="date" value="{{$ingresos->ing_fecha}}" name="ing_fecha" id="ing_fecha">
	<br>
	<br>
	<button class="btn btn-success"> 
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
		  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
		</svg>
		GUARDAR
	</button>
</form>

@endsection