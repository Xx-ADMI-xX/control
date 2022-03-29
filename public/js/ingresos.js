const validar=()=>{
	const tpI_id=document.querySelector("#tpI_id");
	const ing_fecha=document.querySelector("#ing_fecha");
	const ing_cantidad=document.querySelector("#ing_cantidad");
	const ing_detalle=document.querySelector("#ing_detalle");
	if (tpI_id.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'Seleccionar un tipo de ingreso'
		})
		return false
	}
	if (ing_fecha.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'Seleccionar una fecha'
		})
		return false
	}
	if (ing_cantidad.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'Llenar la cantidad de ingreso'
		})
		return false
	}
	if (ing_detalle.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'Describir el ingreso'
		})
		return false
	}
}