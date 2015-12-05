<?php 
	session_start();

		$_SESSION['dni']=null;
		$_SESSION['id']=null;
		$_SESSION['tipo']=null;
		$_SESSION['tiempo']=null;

	session_destroy();
 ?>