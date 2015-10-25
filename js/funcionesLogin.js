function MostrarLogin()
{
	//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		alert(retorno.responseText);	
	});
}

function validarLogin()
{
	//alert("Login");
	var dni=$("#dni").val();
	var clave=$("#clave").val();
	var recordar=$("#recordarme").is(':checked');
	//alert(recordar);

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			dni:dni,
			clave:clave,
			recordarme:recordar
		}
	});

	funcionAjax.done(function(retorno){
		alert(retorno);
		if (retorno!="error") {
			MostarMenu();
		}
		else{
			alert("Usuario o clave incorecta.");
		}		
	});

	funcionAjax.fail(function(retorno){
		alert(retorno.responseText);	
	});
}

function deslogear()
{	
	//alert("desloguear");
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
		MostrarInicio();
		//MostarMenu();
		//MostrarLogin();			
	});
}