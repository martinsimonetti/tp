<?php
class local
{
	public $id;
 	public $descripcion;
 	public $provincia;
 	public $localidad;  	
  	public $direccion;
  	public $telefono;
  	public $foto;

	public function GuardarLocal()
	 {
	 	if($this->id>0)
 		{
 			$this->ModificarLocal();
 		}else {
 			$this->InsertarLocal();
 		}
	 }

	 public function InsertarLocal()
	 {
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO locales(
			descripcion,provincia,localidad,direccion,telefono,foto)
		VALUES(
			'$this->descripcion','$this->provincia','$this->localidad','$this->direccion','$this->telefono','$this->foto')");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Insertarlocal('$this->nombre','$this->clave','$this->correo','$this->sexo')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
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
	}
}
?>