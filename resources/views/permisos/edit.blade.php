@extends('layouts.app')
@section('content')
<script src="{{asset('js/permisos.js')}}"></script>

<h2 class="bg-dark text-white">Editar permisos</h2>
<form action="{{route('permisos.update',$permisos->prm_id)}}" method="POST" onsubmit="return validar()">
	@csrf
	<label>Detalle del Permiso</label>

	<br>
	<input type="text" value="{{$permisos->prm_detalle}}" name="prm_detalle" id="prm_detalle">
	<br>
	<br>
	<button type="submit" class="btn btn-success" > 
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
		  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
		</svg>
		GUARDAR
	</button>
</form>

@endsection