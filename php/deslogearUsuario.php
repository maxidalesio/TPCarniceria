<?php 
	session_start();

		$_SESSION['mail']=null;
		$_SESSION['clave']=null;
		$_SESSION['tipo']=null;

	session_destroy();
 ?>