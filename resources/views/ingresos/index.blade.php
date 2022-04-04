@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de los ingresos</h2>
<a href="{{route('ingresos.create')}}" class="btn btn-primary"> Nuevo </a>
<a class="btn btn-primary" href="{{route('tipoI')}}">Tipo (I)</a>
<p></p>

<form action="{{route('ingresos.search')}}" method="POST">
	@csrf
	Desde:<input type="date" name="desde" value="{{$desde}}">
	Hasta:<input type="date" name="hasta" value="{{$hasta}}">
	<button class="btn btn-success" value="btn_buscar" name="btn_buscar">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
		  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
		</svg>
	</button>
	<button class="btn btn-danger" value="btn_pdf" name="btn_pdf">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
		  <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
		  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
		</svg>
		PDF
	</button>
</form>
<p></p>
	
	<table class="table">
		<th> # </th>
		<th> Cantidad </th>
		<th> Tipo </th>
		<th> Fecha </th>
		<th> Usuario </th>
		<th> Detalle </th>
		<th> Acciones </th>
		<?php
			$t_ing=0; 
		?>

	@foreach($ingresos as $ing)
	<?php 
	if ($ing->ing_detalle) {
		$t_ing+=$ing->ing_cantidad;
	}
	?>
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>${{number_format($ing->ing_cantidad,2)}}</td>
		<td>{{$ing->tpI_Nombre}}</td>
		<td>{{$ing->ing_fecha}}</td>
		<td>{{$ing->usu_Nombre}}</td>
		<td>{{$ing->ing_detalle}}</td>
		<td>
			<div class=row>
			<a href="{{route('ingresos.edit',$ing->ing_id)}}" class="btn btn-primary btn-sm"> 
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
				  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
				</svg>
			</a>
 			
			<form action="{{route('ingresos.destroy',$ing->ing_id)}}" method="POST" onsubmit="return confirm('¿Esta seguro de eliminar este tipo de ingreso?')" class="pull-left">
			@csrf
			<button class="btn btn-danger btn-sm ">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
				  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
				</svg>
			</button>
			</form>
			</div>


		</td>
	</tr>
	@endforeach
	<tr>
		<th colspan="2">Total:</th>
		<th>Ingresos:{{$t_ing}}</th>
	</tr>
</table>

@endsection