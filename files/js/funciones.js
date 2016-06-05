function limpiar()
{
if(confirm('¿Quiere limpiar el formulario?. ¡Todos los datos seran borrados!'))
return true;

else
return false;

}
function validar()
{
if(confirm('Estas mandando un formulario. ¿Esta Deacuerdo?'))
return true;

else
return false;

};

function mostrarPassword(){

		var chkbox = document.getElementById("mostrar");
		var contenido = document.getElementById("password");
		var atributo = contenido.getAttribute("type");

		if(chkbox.checked){
			contenido.setAttribute("type","password");
		}else{
			contenido.setAttribute("type","text");
		}
};


