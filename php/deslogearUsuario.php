<?php 
	session_start();

		$_SESSION['mail']=null;
		$_SESSION['clave']=null;
		$_SESSION['tipo']=null;
		$_SESSION['id']=null;
		unset($_SESSION["cart_array"]);

	session_destroy();
 ?>