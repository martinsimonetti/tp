function GuardarUsuario()
{
		//alert("Guardar");
		
		var formData = new FormData(document.getElementById("FormAltaUsuario"));
        formData.append("queHacer", "GuardarUsuario");

        if (document.getElementById('user').checked) {
			formData.append("tipo", "user");
		}
		else{
			formData.append("tipo", "admin");
		}

		var funcionAjax=$.ajax({
		url: "nexo.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
	    processData: false
	});
	funcionAjax.done(function(retorno){
			Mostrar('GrillaUsuarios');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}

function BorrarUsuario(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUsuario",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar('GrillaUsuarios');		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}

/*function EditarPersona(idParametro)
{	
	//alert(idParametro);
	Mostrar('Alta');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerPersona",
			id:idParametro
		}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		var persona =JSON.parse(retorno);
		$('#idOculto').val(persona.id);
		//alert(persona.id);
		$('#apellido').val(persona.apellido);
		//alert(persona.apellido);
		$('#nombre').val(persona.nombre);
		//alert(persona.nombre);
		$('#dni').val(persona.dni);
		//alert(persona.dni);
		$('#titulo').text("MODIFICACIÓN");
		$('#imgPerfil').attr("src","fotos/"+persona.foto);
		//alert("fotos/"+persona.foto);
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}*/