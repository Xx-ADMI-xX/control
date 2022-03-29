@extends('layouts.app')
@section('content')
<script src="{{asset('js/permisos.js')}}"></script>

<h1 class="bg-dark text-white">Formulario de registro</h1>
<form action="{{route('permisos.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<label>Detalle del Permiso</label>
	<br>
	<input type="text" name="prm_detalle" id="prm_detalle">
	<br>
	<br>
	<button class="btn btn-success"> Guardar </button>
</form>
@endsection