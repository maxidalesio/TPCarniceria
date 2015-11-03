<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$mail=$_POST['mail'];
	$clave=$_POST['clave'];
	$recordar=$_POST['recordarme'];

	$unUsuario = usuario::ValidarUsuario($mail,$clave);
		
	if($unUsuario)
	{
		session_start();
		$_SESSION['mail'] = $unUsuario->mail;
		$_SESSION['clave'] = $unUsuario->clave;
		$_SESSION['tipo'] = $unUsuario->tipo;		
		if($recordar == "true")
		{
			setcookie("mail", $mail, time()+36000, '/');			
		}
		else
		{
			setcookie("mail", $mail, time()-36000, '/');			
		}
		echo $recordar;
	}
	else
	{
		echo "error";		
	}
?>