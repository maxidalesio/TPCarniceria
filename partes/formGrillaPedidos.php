<?php 
session_start();
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/pedido.php");
require_once("clases/producto.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{

	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "user")
	{
		$arrayDePedidos = pedido::TraerPedidosPorIdusuario($_SESSION['id']);
	}
	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
	{
		$arrayDePedidos = pedido::TraerTodosLosPedidos();
	}
	echo "<div class='container'>
	<div class='table-responsive'>
	<table class='table'>
	<thead>
	<tr>
	<th>Nro Pedido</th>";
	if($_SESSION['tipo'] == "admin")
	{
		echo "<th>Nombre Cliente</th>";
	}
	echo"<th>Fecha</th><th>Retiro/Envío</th><th>Total</th><th>Imprimir Detalle</th><th>Cancelar Pedido</th
	</tr>
	</thead>
	<tbody>";

	
	foreach ($arrayDePedidos as $pedido) {
		if($_SESSION['tipo'] == "admin")
		{
			$usuario = usuario::TraerUnUsuario($pedido->idusuario);
		//$m = '"'.$usuario->provincia.'", "'.$usuario->direccion.'", "'.$usuario->localidad.'", '.$usuario->id;
			echo "<input type='text' hidden name='destino".$pedido->idpedido."' id='destino".$pedido->idpedido."' value ='".$usuario->direccion.", ".$usuario->localidad.", ".$usuario->provincia."' />";
			echo "<input type='text' hidden name='origen".$pedido->idpedido."' id='origen".$pedido->idpedido."' value ='Sucre 240, Piñeyro, Buenos Aires'/>";
			echo "<input type='text' hidden name='modoViaje".$pedido->idpedido."' id='modoViaje".$pedido->idpedido."' value ='DRIVING'/>";
		}
		//$m = '"'.$usuario->provincia.'", "'.$usuario->direccion.'", "'.$usuario->localidad.'", "'.$usuario->nombre." ".$usuario->apellido.'"';
		echo"<tr>							
		<td>$pedido->idpedido</td>";
		if($_SESSION['tipo'] == "admin")
		{
			echo "<td>".$usuario->apellido." ".$usuario->nombre."</td>";
		}
		echo "<td>$pedido->fecha</td>";
		if ($pedido->retiro == "sucursal")
			echo "<td>En sucursal</td>";
		else
		{
			if ($_SESSION['tipo'] == "admin")
				echo "<td><button onclick='Geolocalizacion.Rutas.buscar(".$pedido->idpedido.")' class='btn btn-warning' style='background-color: green; color:white;'>Ver en Mapa</button></td>";
			else
				echo "<td>A mi domicilio</td>";
		}

		echo "<td>$".$pedido->total."</td>
		<td><a href='php/imprimirFactura.php?id=".$pedido->idpedido."' class='btn btn-warning' style='background-color: red; color:white;'>PDF</a><a href='php/imprimirFacturaDoc.php?id=".$pedido->idpedido."' class='btn btn-warning' style='background-color: blue; color:white;'>Word</a></td>
		<td><a onclick='BorrarPedido($pedido->idpedido)' class='btn btn-danger' style='color:white;'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span> Borrar Pedido</a></td>
		</tr>   ";
	}
	echo"</tbody>
	</table>
	</div>
	</div>";


	?>

	<?php
	if($_SESSION['tipo'] == "admin")
	{
		?>
		<div id="contenedor" style="height:900px">
			<div id="mostrarMapa" style="float:left; width:70%; height:650px">
				<script async defer src="https://maps.google.com/maps/api/js?callback=Geolocalizacion.Rutas.mostrarGoogleMaps"></script>
			</div>
			<div id="panelRuta" style="float:right; overflow: auto; width:30%; height: 650px"></div>
		</div>
		<?php
	}
}
else 
{
	echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
	<button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
}

?>