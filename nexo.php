<?php 
//require_once("clases/AccesoDatos.php");
//require_once("clases/usuario.php");
$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'MostarLogin':
		include("partes/formLogin.php");
		break;
	case 'MostarMenu':
		include("partes/barraMenu.php");
		break;
	case 'Inicio':
		header("location: index.php");
		break;
	/*case 'alta':
		include("partes/formAlta.php");
		break;
	case 'desloguear':
			include("php/deslogearUsuario.php");
		break;
	case 'grilla':
			include("partes/formGrilla.php");
		break;	
	case 'BorrarUsuario':
			$usuario = new usuario();
			$usuario->id=$_POST['id'];
			$cantidad=$usuario->BorrarUsuario();
			echo $cantidad;
		break;
	case 'GuardarUsuario':
			$usuario = new usuario();
			$usuario->id=$_POST['id'];
			$usuario->nombre=$_POST['nombre'];
			$usuario->correo=$_POST['correo'];
			$usuario->clave=$_POST['clave'];
			$usuario->tipo=$_POST['tipo'];
			$cantidad=$usuario->GuardarUsuario();
			echo $cantidad;
		break;
	case 'Editarsuario':
			session_start();
			$unUsuario = usuario::ValidarUsuario($_SESSION['correo'],$_SESSION['pass']);		
			echo json_encode($unUsuario);
			//echo var_dump($unUsuario);
		break;*/
	default:
		# code...
		break;
}
 ?>