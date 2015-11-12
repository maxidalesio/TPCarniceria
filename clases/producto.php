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

	public function BorrarProducto()
	 {
 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from productos WHERE id=:id");	
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarProducto(:id)");		
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
		$consulta->execute();
		return $consulta->rowCount();
	 }

	public static function TraerUnProducto($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from productos where id = $id");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnProducto($id)");
		$consulta->execute();
		$localBuscado= $consulta->fetchObject('producto');
		return $localBuscado;			
	}

	public function ModificarProducto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("
			UPDATE productos 
			SET descripcion=:descripcion, info=:info, precio=:precio, tipo=:tipo, foto=:foto
			WHERE id=:id");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->bindValue(':descripcion',$this->descripcion, PDO::PARAM_STR);
		$consulta->bindValue(':info',$this->info, PDO::PARAM_STR);
		$consulta->bindValue(':precio',$this->precio, PDO::PARAM_STR);
		$consulta->bindValue(':tipo',$this->tipo, PDO::PARAM_STR);
		$consulta->bindValue(':foto',$this->foto, PDO::PARAM_STR);
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Modificarlocal('$this->id','$this->clave','$this->correo','$this->sexo')");
		return $consulta->execute();
	}
}
?>