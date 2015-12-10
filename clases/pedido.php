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

	public static function TraerUnPedido($idp) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from pedidos where idpedido = $idp");
		$consulta->execute();
		$pedidoBuscado= $consulta->fetchObject('pedido');
		return $pedidoBuscado;			
	}

	public static function TraerDetallesPorId($idp)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from detallepedido where idpedido = $idp");
		$consulta->execute();
		$arrayDetalles= $consulta->fetchAll();
		return $arrayDetalles;			
	}

	public static function TraerPedidosPorIdusuario($idu)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from pedidos where idusuario = $idu");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "pedido");		
	}

	public static function TraerTodosLosPedidos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from pedidos");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "pedido");	
	}

	public static function BorrarPedido($idp)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from pedidos WHERE idpedido=:id");	
		$consulta->bindValue(':id',$idp, PDO::PARAM_INT);		
		$consulta->execute();
		self::BorrarDetallesDePedido($idp);
	}

	public static function BorrarDetallesDePedido($idp)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from detallepedido WHERE idpedido=:id");	
		$consulta->bindValue(':id',$idp, PDO::PARAM_INT);		
		$consulta->execute();
	}

	public static function traerCantidadPorFecha($fecha)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("
			SELECT productos.descripcion AS Producto, sum(detallepedido.cantidad) AS Cantidad
			FROM productos, detallepedido, pedidos
			WHERE productos.id = detallepedido.id
			AND detallepedido.idpedido = pedidos.idpedido
			AND pedidos.fecha = :fecha
			GROUP BY productos.descripcion 
			");
		$consulta->bindValue(':fecha',$fecha, PDO::PARAM_STR);	
		$consulta->execute();			
		return $consulta->fetchAll();	
	}
}
?>