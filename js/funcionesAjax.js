function Mostrar(queMostrar)
{
	//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		alert("Algo");
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