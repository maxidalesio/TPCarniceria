<?php
class usuario
{
	public $id;
 	public $nombre;
 	public $apellido;
 	public $mail;	
  	public $clave;  	
  	public $direccion;
  	public $localidad;
  	public $provincia;
  	public $telefono;
  	public $tipo;

	 public static function ValidarUsuario($mail, $clave) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios WHERE mail=:mail AND clave=:clave");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnusuario($id)");
		$consulta->bindValue(':dni',$dni, PDO::PARAM_STR);
		$consulta->bindValue(':clave',$clave, PDO::PARAM_STR);
		$consulta->execute();
		$usuarioBuscado= $consulta->fetchObject('usuario');
		return $usuarioBuscado;
	}

	public function GuardarUsuario()
	 {
	 	if($this->id>0)
 		{
 			$this->ModificarUsuario();
 		}else {
 			$this->InsertarUsuario();
 		}
	 }

	 public function InsertarUsuario()
	 {
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO usuarios(
			nombre,apellido,mail,clave,direccion,localidad,provincia,telefono,tipo)
		VALUES(
			'$this->nombre','$this->apellido','$this->mail','$this->clave','$this->direccion','$this->localidad','$this->provincia','$this->telefono','$this->tipo')");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Insertarusuario('$this->nombre','$this->clave','$this->correo','$this->sexo')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	 public static function TraerTodoLosUsuarios()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuarios");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodoLosusuarios");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");		
	}
  	
  	public function BorrarUsuario()
	 {
 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from usuarios WHERE id=:id");	
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Borrarusuario(:id)");		
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
		$consulta->execute();
		return $consulta->rowCount();
	 }

	 public static function TraerUnUsuario($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuarios where id = $id");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnusuario($id)");
		$consulta->execute();
		$usuarioBuscado= $consulta->fetchObject('usuario');
		return $usuarioBuscado;			
	}

	public function ModificarUsuario()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("
			UPDATE usuarios 
			SET nombre=:nombre, apellido=:apellido, direccion=:direccion, telefono=:telefono, mail=:mail, tipo=:tipo
			WHERE id=:id");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':apellido',$this->apellido, PDO::PARAM_STR);
		$consulta->bindValue(':direccion',$this->direccion, PDO::PARAM_STR);
		$consulta->bindValue(':telefono',$this->telefono, PDO::PARAM_STR);
		$consulta->bindValue(':mail',$this->mail, PDO::PARAM_STR);
		$consulta->bindValue(':tipo',$this->tipo, PDO::PARAM_STR);
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Modificarusuario('$this->id','$this->clave','$this->correo','$this->sexo')");
		return $consulta->execute();
	}
}
?>