<script type="text/javascript">
$(document).ready(

	/* This is the function that will get executed after the DOM is fully loaded */
	function () {
		$("#datepicker").datepicker({
			dateFormat: "yy/mm/dd",
			minDate: 5,
			language: "es",
			todayHighlight: true
		});
	});
</script>
<?php
echo "acá tabla con descripción y cantidad de cada producto seleccionado";
echo "</br>";
?>


<form class="form-horizontal" id="FormProducto" method="post" onsubmit="GuardarProducto();return false" enctype="multipart/form-data">
	<!-- Form Name -->
	<fieldset>
		<legend>Confirmar Pedido</legend>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="datepicker">Fecha:</label>  
			<div class="col-md-4">
				<input id="datepicker" name="datepicker" type="text"class="form-control" required="">
				<span class="help-block">Ingrese fecha para el Pedido, recuerde que es con mínimo 5 días de anticipación. Las fechas blancas no podrán ser elegidas.</span>  
			</div>
		</div>
		<!-- Multiple Radios (inline) -->
		<div class='form-group'>
			<label class='col-md-4 control-label' for='rbTipo'>Tipo</label>
			<div class='col-md-4'> 
				<label class='radio-inline' for='sucursal'>
					<input type='radio' name='rbTipo' id='sucursal' checked='checked'>Retiro en el local
				</label>
				<label class='radio-inline' for='domicilio'>
					<input type='radio' name='rbTipo' id='domicilio'>A mi domicilio
				</label>
			</div>
		</div>

		<!-- Buttons-->
	</div><div class="btn-group pull-right">
	<button id="btnAtras" onclick="Mostrar('Productos'); return false" class="btn btn-sucess">Continuar Comprando</button>
	<input type="submit" id="btnAceptar" name="btnAceptar" class="btn btn-danger" value="Aceptar">
</div>
</fieldset>    
</form>

