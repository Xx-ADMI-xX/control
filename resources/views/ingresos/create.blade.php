@extends('layouts.app')
@section('content')
<h1 class="bg-dark text-white">Formulario de registro - Ingreso</h1>
<form action="" method="POST">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<label>Tipo del Ingreso</label>
			<br>
			<select name="" id="" class="form-control">
				<option value=""> Elija una opcion </option>
				@foreach($tipoingresos as $t)
				<option value="{{$t->tip_id}}"> {{$t->tpI_Nombre}} </option>
				@endforeach
			</div>
		</div>
	</div>
</form>
@endsection