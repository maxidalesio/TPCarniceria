<?php
session_start();
?>
<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<div class="navbar-brand">
		<a href="index.php"><h1><span>C</span>arnicería Libre</h1></a>
	</div>
</div>
<div class="navbar-collapse collapse">							
	<div class="menu">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation"><a onclick="MostrarInicio()">Inicio</a></li>
			<li role="presentation" id="spreadproductos"><a onclick="Mostrar('Productos')">Nuestros Productos</a></li>
			<li role="presentation" id="loguear"
			<?php 
			if(isset($_SESSION['tipo']))
				{echo "style='display: none'";}
			else
				{echo "style='display: block'";}
			?>><a onclick="MostrarLogin()">Iniciar sesión</a></li>
			<!--<li role="presentation"><a href="portfolio.html">Portfolio</a></li>-->
			<li role="presentation" id="perfil"
			<?php 
			if(!isset($_SESSION['tipo']))
				{echo "style='display: none'";}
			else
				{echo "style='display: block'";}
			?>>
			<?php
			echo "<a onclick='EditarUsuario(".$_SESSION['id'].")'>Mis Datos</a></li>";
			?>
			<li role="presentation" id="pedidos"
			<?php 
			if(!isset($_SESSION['tipo']))
				{echo "style='display: none'";}
			else
				{echo "style='display: block'";}
			?>><a onclick="Mostrar('Pedidos')">Ver Pedidos</a></li>
			<li role="presentation" id="desloguear"
			<?php 
			if(!isset($_SESSION['tipo']))
				{echo "style='display: none'";}
			else
				{echo "style='display: block'";}
			?>><a onclick="deslogear()">Cerrar sesión</a></li>
			<li role="presentation" id="usuarios"
			<?php 
			if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
				{echo "style='display: block'";}
			else
				{echo "style='display: none'";}
			?>><a onclick="Mostrar('GrillaUsuarios')">Usuarios</a></li>
			
			<!--li role="presentation"><a href="contact.html">Contacto</a></li-->									
		</ul>
	</div>
</div>