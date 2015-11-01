<?php
class encuesta
{
	public $id;
 	public $idUsuario;
 	public $idLocal;
 	public $fecha;
 	public $p1;
 	public $p2;
 	public $p3;
 	public $p4;
 	public $p5;
 	public $p6;
 	public $p7;
 	public $p8;
 	public $p9;

 	public function InsertarEncuesta()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO encuestas(
			idUsuario,idLocal,fecha,p1,p2,p3,p4,p5,p6,p7,p8,p9)
		VALUES(
			'$this->idUsuario',
			'$this->idLocal',
			'$this->fecha',
			'$this->p1',
			'$this->p2',
			'$this->p3',
			'$this->p4',
			'$this->p5',
			'$this->p6',
			'$this->p7',
			'$this->p8',
			'$this->p9')");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Insertarlocal('$this->nombre','$this->clave','$this->correo','$this->sexo')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function TraerTodasLasEncuestasDelUsuario($id)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT e.*, l.descripcion FROM encuestas as e, locales as l WHERE e.idUsuario='$id' AND e.idLocal = l.id");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodoLoslocals");
		$consulta->execute();			
		return $consulta->fetchAll();		
	}

	public static function TraerTodasLasEncuestas()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT e.*, l.descripcion, u.nombre, u.apellido FROM encuestas as e, locales as l, usuarios as u WHERE e.idLocal = l.id AND e.idUsuario = u.id");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodoLoslocals");
		$consulta->execute();			
		return $consulta->fetchAll();		
	}

	public static function TraerEncuesta($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT e.*, u.nombre, u.apellido FROM encuestas as e, usuarios as u WHERE e.id = '$id' AND e.idUsuario = u.id");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnlocal($id)");
		$consulta->execute();
		$localBuscado= $consulta->fetchAll();
		return $localBuscado;			
	}

	/*public function GuardarLocal()
	 {
	 	if($this->id>0)
 		{
 			$this->ModificarLocal();
 		}else {
 			$this->InsertarLocal();
 		}
	 }

	 

	 public static function TraerTodoLosLocales()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from locales");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodoLoslocals");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "local");		
	}
  	
  	public function BorrarLocal()
	 {
 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from locales WHERE id=:id");	
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Borrarlocal(:id)");		
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
		$consulta->execute();
		return $consulta->rowCount();
	 }

	 public static function TraerUnLocal($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from locales where id = $id");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnlocal($id)");
		$consulta->execute();
		$localBuscado= $consulta->fetchObject('local');
		return $localBuscado;			
	}

	public function ModificarLocal()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("
			UPDATE locales 
			SET descripcion=:descripcion, provincia=:provincia, localidad=:localidad, direccion=:direccion, telefono=:telefono, foto=:foto
			WHERE id=:id");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->bindValue(':descripcion',$this->descripcion, PDO::PARAM_STR);
		$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
		$consulta->bindValue(':localidad',$this->localidad, PDO::PARAM_STR);
		$consulta->bindValue(':direccion',$this->direccion, PDO::PARAM_STR);
		$consulta->bindValue(':telefono',$this->telefono, PDO::PARAM_STR);
		$consulta->bindValue(':foto',$this->foto, PDO::PARAM_STR);
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Modificarlocal('$this->id','$this->clave','$this->correo','$this->sexo')");
		return $consulta->execute();
	}*/
}
?>