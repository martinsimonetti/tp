<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/local.php");
require_once("clases/encuesta.php");

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
	case 'AltaUsuario':
		include("partes/formAltaUsuario.php");
		break;
	case 'GrillaUsuarios':
		include("partes/formGrillaUsuarios.php");
		break;
	case 'GuardarUsuario':
		$usuario = new usuario();
		$usuario->id=$_POST['txtId'];
		$usuario->nombre=$_POST['txtNombre'];
		$usuario->apellido=$_POST['txtApellido'];
		$usuario->dni=$_POST['txtDni'];
		$usuario->clave=$_POST['txtClave'];
		$usuario->direccion=$_POST['txtDireccion'];
		$usuario->telefono=$_POST['txtTelefono'];
		$usuario->mail=$_POST['txtMail'];
		$usuario->tipo=$_POST['tipo'];
		
		$cantidad=$usuario->GuardarUsuario();
		echo $cantidad;
		//echo var_dump($usuario->GuardarUsuario());
		break;
	case 'BorrarUsuario':
		$usuario = new usuario();
		$usuario->id=$_POST['id'];
		$cantidad=$usuario->BorrarUsuario();
		echo $cantidad;
	break;
	case 'TraerUsuario':
		$usuario = usuario::TraerUnUsuario($_POST['id']);
		echo json_encode($usuario);
	break;
	case 'GrillaLocales':
		include("partes/formGrillaLocales.php");
		break;
	case 'AltaLocal':
		include("partes/formAltaLocal.php");
		break;
	case 'GuardarLocal':
		include("partes/guardarLocal.php");		
		//echo $cantidad;
		//echo var_dump($_POST['imgPerfil']);
		break;
	case 'BorrarLocal':
		$local = new local();
		$local->id=$_POST['id'];
		$cantidad=$local->BorrarLocal();
		echo $cantidad;
		break;
	case 'TraerLocal':
		$local = local::TraerUnLocal($_POST['id']);
		echo json_encode($local);
		break;
	case 'VerEnMapa':
		include("partes/formMapa.php");
		break;
	case 'AltaEncuesta':
		include("partes/formAltaEncuesta.php");
		break;
	case 'GrillaEncuestas':
		include("partes/formGrillaEncuestas.php");
		break;
	case 'GuardarEncuesta':
		session_start();
		$encuesta = new encuesta();
		$encuesta->id=$_POST['txtId'];
		$encuesta->idUsuario=$_SESSION['id'];
		$encuesta->idLocal=$_POST['locales'];
		$encuesta->p1=$_POST['p1'];
		$encuesta->p2=$_POST['p2'];
		$encuesta->p3=$_POST['p3'];
		$encuesta->p4=$_POST['p4'];
		$encuesta->p5=$_POST['p5'];
		$encuesta->p6=$_POST['p6']."/".$_POST['otrosP6'];
		$encuesta->p7=$_POST['p7']."/".$_POST['otrosP7'];
		$encuesta->p8=$_POST['p8'];
		$encuesta->p9=$_POST['p9'];
		
	 	$cantidad=$encuesta->InsertarEncuesta();
		echo $cantidad;
		//echo var_dump($encuesta);
		break;
	default:
		# code...
		break;
}
 ?>