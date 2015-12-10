<?php
require_once ('../clases/AccesoDatos.php');
require_once ('../clases/usuario.php');
require_once ('../clases/pedido.php');
require_once ('../clases/producto.php');
require_once ('../lib/dompdf/dompdf_config.inc.php');

session_start();

$pedido = pedido::traerUnPedido($_GET['id']);
$arrayDetalles = pedido::traerDetallesPorId($pedido->idpedido);
$usuario = usuario::TraerUnUsuario($pedido->idusuario);

$codigoHTML = 
"<html>
<head>
<meta charset='utf-8'>
<title></title>
</head>
<body>
<h1 align='center'>Carnicería Libre</h1>
<h3>Numero de Pedido: ".$pedido->idpedido."</h3>
<h3>Fecha de Pedido: ".$pedido->fecha."</h3>
<h3>Cliente: ".$usuario->apellido.", ".$usuario->nombre."</h3>";
if ($pedido->retiro == "sucursal")
	$codigoHTML .= "
<h3>Dirección de Retiro: Sucre 240, Piñeyro, Buenos Aires</h3>";
else
	$codigoHTML .= "
<h3>Dirección de Envío: ". $usuario->direccion.", ".$usuario->localidad.", ".$usuario->provincia."</h3>";	

$codigoHTML.="
<h3 align='center'>---------------------------------------</h3>";
$cartTotal= 0;

foreach ($arrayDetalles as $each_item) { 
	$item_id = $each_item[1];
	$item_quantity= $each_item[2];
	$prod = producto::TraerUnProducto($item_id);
	$prodTotal = $item_quantity * $prod->precio;
	$cartTotal = $cartTotal + $prodTotal;
	$codigoHTML.="
	<h5>$prod->descripcion - Cantidad: $item_quantity - Precio Unitario: $".$prod->precio." - Total Producto: $".$prodTotal."<h5>";
}
$codigoHTML.="
<h3 align='right'> Total Pedido: $".$cartTotal."<h3>";
unset($_SESSION["cart_array"]);

$codigoHTML .= "
</body>
</html>";

echo $codigoHTML;
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=".$pedido->idpedido."factura.doc");

//$dompdf=new DOMPDF();
//$dompdf->load_html($codigoHTML);
//ini_set("memory_limit","128M");
//$dompdf->render();
//$dompdf->stream("Pedido-N".$pedido->idpedido.".pdf");
?> 
