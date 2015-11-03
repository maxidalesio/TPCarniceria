<?php
	require_once("clases/AccesoDatos.php");
	require_once("clases/usuario.php");

	$arrayDeUsuarios=usuario::TraerTodoLosUsuarios();
?>
<div align="right">
	<button onclick="Mostrar('MostrarRegistro')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Usuario</button>
</div>
<br>
<div>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th><th>Apellido</th><th>Email</th><th>Dirección</th><th>Localidad</th><th>Provincia</th><th>Teléfono</th><th>E-mail</th><th>Tipo</th><th>Editar</th><th>Borrar</th>
			</tr>
		</thead>
		<tbody>

			<?php 
				foreach ($arrayDeUsuarios as $usuario) {
					echo"<tr>							
							<td>$usuario->nombre</td>
							<td>$usuario->apellido</td>
							<td>$usuario->mail</td>
							<td>$usuario->direccion</td>
							<td>$usuario->localidad</td>
							<td>$usuario->provincia</td>
							<td>$usuario->telefono</td>
							<td>$usuario->mail</td>
							<td>$usuario->tipo</td>
							<td><a onclick='EditarUsuario($usuario->id)' class='btn btn-warning' style='color:white;'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
							<td><a onclick='BorrarUsuario($usuario->id)' class='btn btn-danger' style='color:white;'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
						</tr>   ";
				}
			 ?>
		</tbody>
	</table>	
</div>