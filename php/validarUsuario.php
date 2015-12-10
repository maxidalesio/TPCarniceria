<?php 
require_once("../clases/AccesoDatos.php");
require_once("../clases/usuario.php");
require_once("../clases/validadora.php");

$mail=$_POST['mail'];
$clavePost=$_POST['clave'];
$recordar=$_POST['recordarme'];

	/*$unUsuario = usuario::ValidarUsuario($mail,md5($clavePost));
		
	if($unUsuario)
	{
		session_start();
		$_SESSION['mail'] = $unUsuario->mail;
		$_SESSION['id'] = $unUsuario->id;
		$_SESSION['clave'] = $clavePost;
		$_SESSION['tipo'] = $unUsuario->tipo;		
		if($recordar == "true")
		{
			setcookie("mail", $mail, time()+36000, '/');			
		}
		else
		{
			setcookie("mail", $mail, time()-36000, '/');			
		}
		echo $_SESSION['tipo'];
	}
	else
	{
		echo "error";		
	}*/
	echo validadora::ValidarLogin($mail,$clavePost,$recordar);
	?>