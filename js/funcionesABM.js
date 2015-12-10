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
		cache: false,
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

function GuardarProducto()
{
		alert("Guardar Producto");

		var formData = new FormData(document.getElementById("FormProducto"));
        formData.append("queHacer", "GuardarProducto");
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
		alert("ID DEL PRODUCTO"+retorno);
		//MostrarInicio();
		Mostrar('Productos');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno.responseText);
	});
}


function BorrarProducto(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarProducto",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		alert("id: " + retorno);
		Mostrar('Productos');		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}

function EditarProducto(idParametro)
{	
	//alert(idParametro);
	Mostrar('MostrarFormProducto');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		cache: false,
		data:{
			queHacer:"TraerProducto",
			id:idParametro
		}
	});	
	funcionAjax.done(function(retorno){
		alert(retorno);
		var prod =JSON.parse(retorno);
		$('#txtId').val(prod.id);
		$('#txtNombre').val(prod.descripcion);
		$('#txtInfo').val(prod.info);
		$('#txtTipo').val(prod.tipo);
		$('#txtPrecio').val(prod.precio);
		var fecha = new Date();
		$('#imgPerfil').attr("src","fotos/"+prod.foto+"?"+fecha);
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}

function AgregarAlCarrito(id)
{	
	var cantidad=$("#txtCant"+id).val();
	alert("Agrego al carro" + id + " "+ cantidad);
	var funcionAjax=$.ajax({
		url:"php/carrito.php",
		type:"post",
		data:{
			pid:id,
			pquantity:cantidad
		}	
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('Productos');
		//MostarMenu();
		//MostrarLogin();			
	});
}

function EditarCarrito(id)
{	
	var cantidad=$("#txtCant"+id).val();
	alert("Edito el carro" + id + " "+ cantidad);
	var funcionAjax=$.ajax({
		url:"php/carrito.php",
		type:"post",
		data:{
			item_to_adjust:id,
			quantity:cantidad
		}	
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('Productos');
		//MostarMenu();
		//MostrarLogin();			
	});
}

function BorrarDelCarrito(id)
{	
	alert("Borro del carro" + id);
	var funcionAjax=$.ajax({
		url:"php/carrito.php",
		type:"post",
		data:{
			index_to_remove:id
		}	
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('Productos');
		//MostarMenu();
		//MostrarLogin();			
	});
}

function GuardarPedido()
{
	 	alert("Guardar Pedido");
		var fecha = $("#datepicker").val();
		alert(fecha);
		var total = $("#txtTotal").val();
		alert(total);
		if (document.getElementById('sucursal').checked) {
			var tipo = "sucursal";
		}
		else{
			var tipo = "domicilio";
		}
		alert(tipo);
        
		var funcionAjax=$.ajax({
		url: "nexo.php",
        type: "post",
        data: {
        	queHacer:"GuardarPedido",
			pedfecha: fecha,
			pedtotal: total,
			pedtipo: tipo,
			dataType: "text"
		}
		}
	);
	funcionAjax.done(function(retorno){
		alert(retorno);
		//MostrarInicio();
		Mostrar('Pedidos');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno.responseText);
	});
}

function BorrarPedido(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarPedido",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar('Pedidos');		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}