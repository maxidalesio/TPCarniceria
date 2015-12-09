<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");

$arrayDeUsuarios=usuario::TraerTodoLosUsuarios();
?>
<div align="right">
	<button onclick="Mostrar('MostrarRegistro')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Usuario</button>
</div>
<br>
<div class="container">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th><th>Apellido</th><th>Email</th><th>Dirección</th><th>Teléfono</th><th>Tipo</th><th>Editar</th><th>Borrar</th><th>Mapa</th>
				</tr>
			</thead>
			<tbody>

				<?php 
				foreach ($arrayDeUsuarios as $usuario) {
					$m = '"'.$usuario->provincia.'", "'.$usuario->direccion.'", "'.$usuario->localidad.'", '.$usuario->id;

					//$m = '"'.$usuario->provincia.'", "'.$usuario->direccion.'", "'.$usuario->localidad.'", "'.$usuario->nombre." ".$usuario->apellido.'"';
					echo"<tr>							
					<td>$usuario->nombre</td>
					<td>$usuario->apellido</td>
					<td>$usuario->mail</td>
					<td>$usuario->direccion, $usuario->localidad, $usuario->provincia</td>
					<td>$usuario->telefono</td>
					<td>$usuario->tipo</td>
					<td><a onclick='EditarUsuario($usuario->id)' class='btn btn-warning' style='color:white;'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
					<td><a onclick='BorrarUsuario($usuario->id)' class='btn btn-danger' style='color:white;'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
					<td><button onclick='VerEnMapa($m)' class='btn btn-warning' style='background-color: green; color:white;'>Ver en Mapa</button></td>
					</tr>   ";
				}
				?>
			</tbody>
		</table>	
	</div>
</div>
<br>
<div id="mapa">
</div>
<br>