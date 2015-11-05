<?php
class producto
{
	public $id;
 	public $descripcion;
 	public $info;
 	public $tipo;
 	public $foto;

 	public function InsertarProducto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO productos(
			descripcion, info, tipo, foto)
		VALUES(
			'$this->descripcion', '$this->info','$this->tipo','$this->foto')");
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
}
?>