<?php
class pedido
{
	public $idpedido;
 	public $fecha;
 	public $retiro;
 	public $total;
 	public $idusuario;

 	public function InsertarPedido()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO pedidos(
			fecha, retiro, total, idusuario)
		VALUES(
			'$this->fecha', '$this->retiro', '$this->total','$this->idusuario')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function TraerUltimoId()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT MAX(idpedido) from pedidos");
		$consulta->execute();
		$array = $consulta->fetchAll();
		return $array[0][0];
	}
	public static function InsertarDetalle($idproducto, $idpedido, $cantidad)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO detallepedido(
			idpedido, id, cantidad)
		VALUES(
			'$idpedido', '$idproducto', '$cantidad')");
		$consulta->execute();
	}
}
?>