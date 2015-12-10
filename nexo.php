<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/producto.php");
require_once("clases/pedido.php");

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
	case 'MostrarFormPedido':
		include("partes/formPedido.php");
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
	case 'BorrarProducto':
		$producto = new producto();
		$producto->id=$_POST['id'];
		$cantidad=$producto->BorrarProducto();
		echo $cantidad;
		break;
	case 'TraerProducto':
		$prod = producto::TraerUnProducto($_POST['id']);
		echo json_encode($prod);
		break;
	case 'GuardarPedido':
		include("php/imprimirFactura.php");
		break;
	case 'guardarMarcadores':
        session_start();
        if(isset($_POST["marcadores"]))
        {
            $filename = "ArchivosTxt/marcadores" . getdate()[0] . ".txt";

            $_SESSION['file'] = $filename;
            $puntos = $_POST["marcadores"];

            $file = fopen($filename, "w");

            foreach ($puntos as $valor)
            {
                $lat =  $valor["lat"];
                $lng =  $valor["lng"];
                $nombre =  $valor["nombre"];
                fwrite($file, $lat.">".$lng.">".$nombre . PHP_EOL);
            }
        fclose($file);

        echo "Marcadores guardados con exito";
        }
        else
            echo "No ingreso marcador/es a guardar";
        break;
	case 'VerEnMapa':
		include("partes/marcador.php");
		break;
	default:
		# code...
		break;
}
 ?>