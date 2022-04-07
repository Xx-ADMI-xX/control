const validar=()=>{
	const ing_cantidad=document.querySelector("#ing_cantidad");
	const ing_detalle=document.querySelector("#ing_detalle");
	const ing_fecha=document.querySelector("#ing_fecha");
	
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
	if (ing_fecha.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'Seleccionar una fecha'
		})
		return false
	}
}