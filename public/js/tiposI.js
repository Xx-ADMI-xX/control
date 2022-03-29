const validar=()=>{
	const tpI_Nombre=document.querySelector("#tpI_Nombre");
	if (tpI_Nombre.value.length==0) {
		Swal.fire({
		  icon:'info',
		  title:'Importante',
		  text:'El detalle de tipo ingreso debe de llenarse'
		})
		return false
	}
}