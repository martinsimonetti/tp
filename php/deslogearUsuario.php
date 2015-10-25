<?php 
	session_start();

		$_SESSION['dni']=null;
		$_SESSION['clave']=null;
		$_SESSION['tipo']=null;

	session_destroy();
 ?>