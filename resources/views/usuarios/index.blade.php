@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de usuarios</h2>
	<table class="table table-bordered">
		<thead>
			<th> # </th>
			<th> Nombre </th>
			<th> Apellido </th>
			<th> CI </th>
			<th> Correo </th>
			<th> Roll </th>
		</thead>
	@foreach($users as $u)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$u->usu_Nombre}}</td>
		<td>{{$u->usu_Apellido}}</td>
		<td>{{$u->usu_CI}}</td>
		<td>{{$u->usu_Correo}}</td>
		<td>{{$u->prm_detalle}}</td>
	</tr>
	@endforeach
	</table>

@endsection