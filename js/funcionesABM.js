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
		//alert(retorno);
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

function EditarUsuario(idParametro)
{	
	//alert(idParametro);
	Mostrar('AltaUsuario');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerUsuario",
			id:idParametro
		}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		var usuario =JSON.parse(retorno);
		//alert(usuario);
		$('#txtId').val(usuario.id);
		//alert(usuario.id);
		$('#txtNombre').val(usuario.nombre);
		//alert(usuario.nombre);
		$('#txtApellido').val(usuario.apellido);
		//alert(usuario.apellido);		
		$('#txtDireccion').val(usuario.direccion);
		//alert(usuario.direccion);
		$('#txtTelefono').val(usuario.telefono);
		//alert(usuario.telefono);
		$('#txtMail').val(usuario.mail);
		//alert(usuario.mail);
		if (usuario.tipo == "user") {
			document.getElementById('user').checked = true;
		}
		else {
			document.getElementById('admin').checked = true;
		}
		$('#txtDni').val(usuario.dni);
		$('#divDni').hide();
		$('#txtClave').val(usuario.clave);
		$('#divClave').hide();
		//alert(usuario.tipo);
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}