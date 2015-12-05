function Mostrar(queMostrar)
{
	//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		cache: false,
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);		
	});
}

function MostarMenu()
{
	//alert("MostarMenu");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		cache: false,
		data:{queHacer:"MostarMenu"}
	});
	funcionAjax.done(function(retorno){
		$("#barraMenu").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);
	});
}

function MostrarInicio()
{
	window.location = "index.php";
}

function ocultarOtros(nombre, nombreOtros)
{ 
	var estado = document.getElementById(nombre).checked;
	//alert(document.getElementById(nombre).checked);
	if (estado) {
		$("#"+nombreOtros).show();
	}
	else{
		$("#"+nombreOtros).hide();	
	}
}

function ValidarClavesIguales()
{
	//alert("Validar clave");
	var clave1 = document.getElementById('txtClaveNueva').value;
	var clave2 = document.getElementById('txtClaveNueva2').value;
	
	if(clave1 == clave2){
		return true;				
	}
	else
	{
		alert("Las contraseñas no son iguales. Reingrese.");
	}

	return false;
}