function GuardarUsuario()
{
	//alert("Guardar");
		var formData = new FormData(document.getElementById("FormRegistro"));
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
		alert(retorno);
		if($('#txtId').val() == "" && retorno !="El mail ya está registrado") {
			MostrarLogin();
		}
		if (retorno =="admin")
			Mostrar('GrillaUsuarios');
		if (retorno =="user")
			Mostrar('PanelUsuario');
		
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
	alert(idParametro);
	Mostrar('MostrarRegistro');
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
		$('#txtLocalidad').val(usuario.localidad);
		$('#txtProvincia').val(usuario.provincia);
		//alert(usuario.direccion);
		$('#txtTelefono').val(usuario.telefono);
		//alert(usuario.telefono);
		$('#txtEmail').val(usuario.mail);
		//alert(usuario.mail);
		if (usuario.tipo == "user") {
			document.getElementById('user').checked = true;
		}
		else {
			document.getElementById('admin').checked = true;
		}
		//$('#txtmail').val(usuario.mail);
		$('#divmail').hide();
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