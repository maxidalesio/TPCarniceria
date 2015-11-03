function MostrarLogin()
{
	//alert(queMostrar);
	alert("Hola");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		alert("Chau");

		alert(retorno.responseText);	
	});
}

function validarLogin()
{
	//alert("Login");
	var mail=$("#mail").val();
	var clave=$("#clave").val();
	var recordar=$("#recordarme").is(':checked');
	//alert(recordar);

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			mail:mail,
			clave:clave,
			recordarme:recordar
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		if (retorno!="error") {
			MostarMenu();
			Mostrar("GrillaLocales");
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