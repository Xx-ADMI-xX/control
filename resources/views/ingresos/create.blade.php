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
					<button class="btn btn-success"> Guardar </button>					
				</div>

			</div>
		</div>
	</div>
</form>
@endsection