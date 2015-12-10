<?php
require_once("clases/AccesoDatos.php");
require_once("clases/producto.php");
session_start();
$arrayDeProductos=producto::TraerTodoLosProductos();
?>

<div align="right"
<?php 
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
	{echo "style='display: block'";}
else
	{echo "style='display: none'";}
?>
>
<button onclick="Mostrar('ConsultarProductos')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Consultar Productos Pedidos Por Día</button>
<button onclick="Mostrar('Estadisticas')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Estadística de Producto Más Vendido</button>
<button onclick="Mostrar('MostrarFormProducto')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Producto</button>
</div>

<div align="right"
<?php 
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "user" && isset($_SESSION["cart_array"] ) && count($_SESSION["cart_array"]) > 0)
	{echo "style='display: block'";}
else
	{echo "style='display: none'";}
?>
>
<button onclick="Mostrar('MostrarFormPedido')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Continuar Pedido→</button>
</div>

<div align="right"
<?php 
if(!isset($_SESSION['tipo']) && isset($_SESSION["cart_array"] ) && count($_SESSION["cart_array"]) > 0)
	{echo "style='display: block'";}
else
	{echo "style='display: none'";}
?>
>
<button onclick="Mostrar('MostrarRegistro')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Regístrate para Continuar</button>
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
			foreach ($arrayDeProductos as $prod) 
			{
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
					$noExisteEnCarro = true;
					if (isset($_SESSION["cart_array"]))
					{
						foreach ($_SESSION["cart_array"] as $each_item) 
						{
							while (list($key, $value) = each($each_item)) 
							{
								if ($key == "item_id" && $value == $prod->id) 
								{
		  			// That item is in cart already so let's adjust its quantity
									echo "
									<td>
									<form id='detallePedido' method='post' onsubmit='EditarCarrito($prod->id);return false' enctype='multipart/form-data'>
									<fieldset>
									<input id='txtId".$prod->id."' name='txtId' type='hidden' placeholder='' value='".$prod->id."' class='form-control input-md' required=''>
									<input id='txtCant".$prod->id."' name='txtCant' type='number' placeholder='Cantidad' value='".$each_item['quantity']."' class='form-control input-md' required=''>
									<input type='submit' id='btnEditar' name='btnEditar' class='btn btn-danger' value='Editar'>
									<a id='btnBorrar' name='btnBorrar' class='btn btn-warning' onclick='BorrarDelCarrito($prod->id)' value='Borrar'>Borrar</a>
									</fieldset>
									</form>
									<td>
									";
									$noExisteEnCarro = false;
								}
							} 
						}

					}
					if($noExisteEnCarro)
					{
						echo "
						<td>
						<form id='detallePedido' method='post' onsubmit='AgregarAlCarrito($prod->id);return false' enctype='multipart/form-data'>
						<fieldset>
						<input id='txtId".$prod->id."' name='txtId' type='hidden' placeholder='' value='".$prod->id."' class='form-control input-md' required=''>
						<input id='txtCant".$prod->id."' name='txtCant' type='number' placeholder='Cantidad' class='form-control input-md' required=''>
						<input type='submit' id='btnAceptar' name='btnAceptar' class='btn btn-danger' value='Agregar al Carrito'>
						</fieldset>
						</form>
						<td>
						";
					}
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