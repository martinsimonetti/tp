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