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

function GuardarLocal()
{
		//alert("Guardar");

		var formData = new FormData(document.getElementById("FormAltaLocal"));
        formData.append("queHacer", "GuardarLocal");
        formData.append("imgPerfil", $('#imgPerfil').attr("src"));

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
		//MostrarInicio();
		Mostrar('GrillaLocales');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno.responseText);
	});
}

function BorrarLocal(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarLocal",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar('GrillaLocales');		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}

function EditarLocal(idParametro)
{	
	//alert(idParametro);
	Mostrar('AltaLocal');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerLocal",
			id:idParametro
		}
	});	
	funcionAjax.done(function(retorno){
		//alert(retorno);
		var local =JSON.parse(retorno);
		//alert(local);
		$('#txtId').val(local.id);
		//alert(local.id);
		$('#txtDescripcion').val(local.descripcion);
		//alert(local.nombre);	
		$('#txtDireccion').val(local.direccion);
		//alert(local.direccion);
		$('#txtProvincia').val(local.provincia);
		//alert(local.direccion);
		$('#txtLocalidad').val(local.localidad);
		//alert(local.direccion);
		$('#txtTelefono').val(local.telefono);
		//alert(local.telefono);
		$('#imgPerfil').attr("src","fotos/"+local.foto);
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}

function GuardarEncuesta()
{
		//alert("Guardar");
		var p6 = document.getElementById("p6-0").checked;
		p6 += "/" + document.getElementById("p6-1").checked;
		p6 += "/" + document.getElementById("p6-2").checked;
		p6 += "/" + document.getElementById("p6-3").checked;

		var p7 = document.getElementById("p7-0").checked;
		p7 += "/" + document.getElementById("p7-1").checked;
		p7 += "/" + document.getElementById("p7-2").checked;
		p7 += "/" + document.getElementById("p7-3").checked;
		p7 += "/" + document.getElementById("p7-4").checked;

		var formData = new FormData(document.getElementById("FormAltaEncuesta"));
        formData.append("queHacer", "GuardarEncuesta");
        formData.append("p6", p6);
        formData.append("p7", p7);

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
		alert(retorno);
		//MostrarInicio();
		Mostrar('GrillaEncuestas');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno.responseText);
	});
}

function VerEncuesta(idParametro)
{	
	//alert(idParametro);
	Mostrar('AltaEncuesta');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerEncuesta",
			id:idParametro
		}
	});	
	funcionAjax.done(function(retorno){
		var encuesta =JSON.parse(retorno);
		//alert(retorno);
		$('#txtId').val(encuesta.id);
		$('#fecha').show();
		$('#txtFecha').val(encuesta[0].fecha);
		//$('#txtFecha').attr("readonly", true);
		var usuario = encuesta[0].apellido + ", " + encuesta[0].nombre;
		$('#usuario').show();		
		$('#txtUsuario').val(usuario);
		//$('#txtUsuario').attr("readonly", true);
		$("#cmbLocales").val(encuesta[0].idLocal);

		if (encuesta[0].p1 == "true") {
			document.getElementById('p1-0').checked=true;
		}
		else{
			document.getElementById('p1-1').checked=true;
		}
		//$('#cmbLocales').attr('disabled', true);
		if (encuesta[0].p2 == "true") {
			document.getElementById('p2-0').checked=true;
		}
		else{
			document.getElementById('p2-1').checked=true;
		}
		$("#p3").val(encuesta[0].p3);
		if (encuesta[0].p4 == "true") {
			document.getElementById('p4-0').checked=true;
		}
		else{
			document.getElementById('p4-1').checked=true;
		}
		$("#p5").val(encuesta[0].p5);
		var texto = encuesta[0].p6;
		var arrayP6 = texto.split('/');
		for (var i = 0; i < 4; i++) {
			if (arrayP6[i] == "true") {
				document.getElementById('p6-'+i).checked=true;
			}
		}
		if (arrayP6[3] == "true") {
			$("#otrosP6").show()
			$("#otrosP6").val(arrayP6[4]);
		}
		var texto = encuesta[0].p7;
		var arrayP7 = texto.split('/');
		for (var i = 0; i < 5; i++) {
			if (arrayP7[i] == "true") {
				document.getElementById('p7-'+i).checked=true;
			}
		}
		if (arrayP7[4] == "true") {
			$("#otrosP7").show()
			$("#otrosP7").val(arrayP7[5]);
		}
		$("#p8").val(encuesta[0].p8);
		if (encuesta[0].p8 == "true") {
			document.getElementById('p8-0').checked=true;
		}
		else{
			document.getElementById('p8-1').checked=true;
		}
		$("#p9").val(encuesta[0].p9);
		if (encuesta[0].p9 == "true") {
			document.getElementById('p9-0').checked=true;
		}
		else{
			document.getElementById('p9-1').checked=true;
		}
		$("#btnBorrar").hide();
		$("#btnAceptar").hide();
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}