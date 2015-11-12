function VerEnMapa(dire, loc, prov, descripcion)
{
    alert(prov + dire +  loc + descripcion);
    var punto = dire +", " +  loc  +", " +  prov +", Argentina";
    console.log(punto);
    var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"VerEnMapa"
		}
	});
    funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#mapa").html(retorno);
        $("#punto").val(punto);
        $("#descripcion").val(descripcion);
		Geolocalizacion.Marcador.iniciar();
		Geolocalizacion.Marcador.verMarcador();
	});
}
