<?php
$foto = "pordefecto.png";

$producto = new producto();
$producto->id=$_POST['txtId'];
$producto->descripcion=$_POST['txtNombre'];
$producto->info=$_POST['txtInfo'];
$producto->precio=$_POST['txtPrecio'];
$producto->tipo=$_POST['txtTipo'];
if(!isset($_FILES["foto"]))
{
		// no se cargo una imagen
		/*if ($_POST['imgPerfil'] != 'fotos/pordefecto.png') {
			$nombre = substr($_POST['imgPerfil'], 6, -1);
			$local->foto = $nombre;
		}*/
	}
	else
	{
		if($_FILES["foto"]['error'])
		{
			//error de imagen
			if ($_POST['imgPerfil'] != "fotos/pordefecto.png") {
				$nombreFoto = substr($_POST['imgPerfil'], 6);
				$foto = $nombreFoto;
			}
		}
		else
		{
			$tamanio =$_FILES['foto']['size'];
			if($tamanio>1024000)
			{
    				// "Error: archivo muy grande!"."<br>";
			}
			else
			{
    			//OBTIENE EL TAMAÑO DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
				//IMAGEN, RETORNA FALSE
				$esImagen = getimagesize($_FILES["foto"]["tmp_name"]);
				if($esImagen === FALSE) 
				{
							//NO ES UNA IMAGEN
				}
				else
				{
					$NombreCompleto=explode(".", $_FILES['foto']['name']);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
					   //"Error archivo de extension invalida";
					}
					else
					{
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "fotos/". $_POST['txtNombre']." - ". $_POST['txtTipo'].".".$Extension;
						$foto=$_POST['txtNombre']." - ".$_POST['txtTipo']. ".".$Extension;
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
						if (move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
						{		
							echo "ok";
						}
						else
						{   
      						// algun error;
						}
					}
				}
			}			
		}
	}
	$producto->foto = $foto;
	/*if ($_FILES['foto']['name'] == "") {
		if ($_POST['imgPerfil'] != 'fotos/pordefecto.png') {
			$nombre = substr($_POST['imgPerfil'], 6);
			$local->foto = $nombre;
		}
	}
	if (!isset($local->foto)) {
		$local->foto = "pordefecto.png";			
	}*/
	$cantidad=$producto->GuardarProducto();
	echo $cantidad;
	?>