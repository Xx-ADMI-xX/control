@extends('layouts.app')
@section('content')
<script src="{{asset('js/ingresos.js')}}"></script>

<h1 class="bg-dark text-white">Formulario de registro - Ingreso</h1>
<form action="{{route('ingresos.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<label>Tipo del Ingreso</label>
				<br>
				<select name="tpI_id" id="tpI_id" class="form-control">
					<option value=""> Elija una opcion </option>
					@foreach($tipoingresos as $t)
					<option value="{{$t->tpI_id}}"> {{$t->tpI_Nombre}} </option>
					@endforeach
				</select>

				<div class="col-md-12 p-3">
					<label for="">Fecha</label>
					<input type="date" class="form-control" name="ing_fecha" id="ing_fecha">
				</div>

				<div class="col-md-12 p-3">
					<label for=""> Cantidad </label>
					<input type="text" class="form-control" name="ing_cantidad" id="ing_cantidad">
				</div>

				<div class="col-md-12 p-3">
					<label for=""> Detalle </label>
					<input type="text" class="form-control" name="ing_detalle" id="ing_detalle">
				</div>

				<div class="col-md-12 mt-3">
					<button type="submit" class="btn btn-success"> 
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
						  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
						</svg>
						GUARDAR
					</button>					
				</div>

			</div>
		</div>
	</div>
</form>
@endsection