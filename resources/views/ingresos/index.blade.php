@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de los ingresos</h2>
<a href="{{route('ingresos.create')}}" class="btn btn-primary"> Nuevo </a>
	<p></p>
	
	<table class="table">
		<th> # </th>
		<th> Cantidad </th>
		<th> Detalle </th>
		<th> Fecha </th>
		<th> Tipo </th>
		<th> Acciones </th>

@endsection