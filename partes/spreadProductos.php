<?php
require_once("clases/AccesoDatos.php");
require_once("clases/producto.php");
session_start();
$arrayDeProductos=producto::TraerTodoLosProductos();
echo "En construcción";

?>
<div align="right"
<?php 
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
	{echo "style='display: block'";}
else
	{echo "style='display: none'";}
?>
>
<button onclick="Mostrar('MostrarFormProducto')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Producto</button>
</div>

<div>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th><th>Descripción</th><th>Precio</th><th>Foto</th>
				<?php 
				if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
					{echo "<th>Editar</th><th>Borrar</th>";}
				else
					{echo "<th>Agregar al Carrito</th>";}
				?>
			</tr>
		</thead>
		<tbody>

			<?php 
			foreach ($arrayDeProductos as $prod) {
				echo"<tr>							
				<td>$prod->descripcion</td>
				<td>$prod->info</td>
				<td>$prod->precio</td>
				<td><img  class='fotoGrilla' src='fotos/".$prod->foto."?".$_SERVER['REQUEST_TIME']."' /></td>";
				if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
				{
					echo "<td><a onclick='EditarProducto($prod->id)' class='btn btn-warning' style='color:white;'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
					<td><a onclick='BorrarProducto($prod->id)' class='btn btn-danger' style='color:white;'> <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>";
				}
				else
				{
					echo "
					<td>
					<form id='detallePedido' method='post' onsubmit='GuardarPedProd();return false'>
					<input id='txtId' name='txtId' type='hidden' placeholder='' value='".$prod->id."' class='form-control input-md' required=''>
					<input id='txtCant' name='txtCant' type='number' placeholder='Cantidad' class='form-control input-md' required=''>
					<input type='submit' id='btnAceptar' name='btnAceptar' class='btn btn-danger' value='Agregar al Carrito'>
					</form>
					<td>
					";
				}						
				echo	"</tr>";
			}
			?>
		</tbody>
	</table>	
</div>
<br>
<div id="carrito">
</div>
<br>