<?php
class producto
{
	public $id;
 	public $descripcion;
 	public $info;
 	public $precio;
 	public $tipo;
 	public $foto;

 	public function InsertarProducto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO productos(
			descripcion, info, precio, tipo, foto)
		VALUES(
			'$this->descripcion', '$this->info', '$this->precio','$this->tipo','$this->foto')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public function GuardarProducto()
	{
		if($this->id>0)
		{
			$this->ModificarProducto();
		}else {
			$this->InsertarProducto();
		}
	}

	public static function TraerTodoLosProductos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from productos");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "producto");		
	}
}
?>