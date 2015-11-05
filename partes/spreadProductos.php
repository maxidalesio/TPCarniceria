<?php
session_start();
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
