<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$dni=$_POST['dni'];
	$clave=$_POST['clave'];
	$recordar=$_POST['recordarme'];

	$unUsuario = usuario::ValidarUsuario($dni,$clave);
		
	if($unUsuario)
	{
		session_start();
		$_SESSION['dni'] = $unUsuario->dni;
		$_SESSION['id'] = $unUsuario->id;
		$_SESSION['tipo'] = $unUsuario->tipo;		
		if($recordar == "true")
		{
			setcookie("dni", $dni, time()+36000, '/');			
		}
		else
		{
			setcookie("dni", $dni, time()-36000, '/');			
		}
		echo $recordar;
	}
	else
	{
		echo "error";		
	}
?>