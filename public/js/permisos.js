const validar=()=>{
	const prm_detalle=document.querySelector("#prm_detalle");
	if (prm_detalle.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'El detalle de permisos debe de llenarse'
		})
		return false
	}
}