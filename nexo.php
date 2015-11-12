<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/producto.php");

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
	case 'MostrarFormProducto':
		include("partes/formProducto.php");
		break;
	case 'GrillaUsuarios':
		include("partes/formGrillaUsuarios.php");
		break;
	case 'Productos':
		include("partes/spreadProductos.php");
		break;	
	case 'GuardarUsuario':
		if (usuario::TraerUnUsuarioPorMail($_POST['txtEmail']) && $_POST['txtId'] == "")
		{
			echo "El mail ya está registrado";
		}
		else
		{
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
		session_start();
		if(isset($_SESSION['tipo']))
			{echo $_SESSION['tipo'];}
		}//echo var_dump($usuario->GuardarUsuario());
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
	case 'GuardarProducto':
		include("partes/guardarProducto.php");	
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
		include("partes/mostrarMapa.php");
		break;
	default:
		# code...
		break;
}
 ?>