
<h2 align="center" style="color:red;">Reporte de los ingresos</h2>
<table class="table table-bordered">
		<th style="color:red;"> # </th>
		<th style="color:red;"> Cantidad </th>
		<th style="color:red;"> Tipo </th>
		<th style="color:red;"> Fecha </th>
		<th style="color:red;"> Usuario </th>
		<th style="color:red;"> Detalle </th>
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
		
	</tr>
	@endforeach
	<tr>
		<th style="color:red;" colspan="2">Total:</th>
		<th  >Ingresos:{{$t_ing}}</th>
	</tr>
</table> 
