<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
//require_once("clases/local.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'MostrarLogin':
		include("partes/formLogin.php");
		break;
	case 'MostarMenu':
		include("partes/menu.php");
		break;
	case 'Inicio':
		header("location: index.php");
		break;
	case 'MostrarRegistro':
		include("partes/formRegistro.php");
		break;
		break;
	case 'GrillaUsuarios':
		include("partes/formGrillaUsuarios.php");
		break;
	case 'GuardarUsuario':
		$usuario = new usuario();
		$usuario->id=$_POST['txtId'];
		$usuario->nombre=$_POST['txtNombre'];
		$usuario->apellido=$_POST['txtApellido'];
		$usuario->mail=$_POST['txtEmail'];
		$usuario->clave=$_POST['txtClave'];
		$usuario->direccion=$_POST['txtDireccion'];
		$usuario->localidad=$_POST['txtLocalidad'];
		$usuario->provincia=$_POST['txtProvincia'];
		$usuario->telefono=$_POST['txtTelefono'];
		$usuario->tipo=$_POST['tipo'];
		
		$cantidad=$usuario->GuardarUsuario();
		echo $cantidad;
		//echo var_dump($usuario->GuardarUsuario());
		break;
	case 'BorrarUsuario':
		$usuario = new usuario();
		$usuario->id=$_POST['id'];
		$cantidad=$usuario->BorrarUsuario();
		echo $cantidad;
	break;
	case 'TraerUsuario':
		$usuario = usuario::TraerUnUsuario($_POST['id']);
		echo json_encode($usuario);
	break;
	/*
	case 'GrillaLocales':
		include("partes/formGrillaLocales.php");
		break;
	
	case 'AltaLocal':
		include("partes/formAltaLocal.php");
		break;
	case 'GuardarLocal':
		include("partes/guardarLocal.php");		
		//echo $cantidad;
		//echo var_dump($_POST['imgPerfil']);
		break;
	case 'BorrarLocal':
		$local = new local();
		$local->id=$_POST['id'];
		$cantidad=$local->BorrarLocal();
		echo $cantidad;
		break;
	case 'TraerLocal':
		$local = local::TraerUnLocal($_POST['id']);
		echo json_encode($local);
		break;*/
	case 'VerEnMapa':
		include("partes/formMapa.php");
		break;
	default:
		# code...
		break;
}
 ?>