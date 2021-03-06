<?php 
session_start();
require_once("clases/AccesoDatos.php");
require_once("clases/producto.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
	?>
	<script type="text/javascript">
	$(document).ready(

		/* This is the function that will get executed after the DOM is fully loaded */
		function () {
			$("#datepicker").datepicker({
				dateFormat: "yy/mm/dd",
				language: "es",
				todayHighlight: true
			});
		});
	</script>

	<form class="form-horizontal" id="FormConsultas" method="post" onsubmit="ConsultarPorFecha();return false" enctype="multipart/form-data">
		<!-- Form Name -->
		<fieldset>
			<legend>Consulta de Productos a Conseguir</legend>

			<div class="form-group">
				<label class="col-md-4 control-label" for="datepicker">Fecha:</label>  
				<div class="col-md-4">
					<input id="datepicker" name="datepicker" type="text"class="form-control" required="">
					<span class="help-block">Ingrese fecha para consultar cantidad de Productos necesarios en ese día.</span>  
				</div>
			</div>
			
			<input type="submit" id="btnAceptar" name="btnAceptar" class="btn btn-danger" value="Confirmar">
		</div>
	</fieldset>    
</form>

<div id="resultado">
</div>
<?php   
}
else 
{
	echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
	<button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
}
?>