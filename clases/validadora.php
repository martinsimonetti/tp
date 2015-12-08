<?php
	class validadora
	{
		public static function ValidarLogin($dni, $clave, $recordar)
		{
			$claveEncriptada = sha1(md5($clave));

			$unUsuario = usuario::ValidarUsuario($dni,$claveEncriptada);
			
			if($unUsuario)
			{
				session_start();
				$_SESSION['dni'] = $unUsuario->dni;
				$_SESSION['id'] = $unUsuario->id;
				$_SESSION['tipo'] = $unUsuario->tipo;
				$_SESSION['tiempo'] = date('d-M-Y g:i:s A');

				if($recordar == "true")
				{
					setcookie("dni", $dni, time()+36000, '/');			
				}
				else
				{
					setcookie("dni", $dni, time()-36000, '/');			
				}
				echo "Correcto";
			}
			else
			{
				echo "Error";		
			}
		}

		public static function ValidarSesionVigente()
		{
			session_start();

			$retorno;
			$duracion = 0;

			//echo var_dump($_SESSION);

			if(isset($_SESSION['dni']))
			{	
				$horaActual = strtotime(date('d-M-Y g:i:s A'));
				$horaSesion = strtotime($_SESSION['tiempo']);

				//echo var_dump($horaActual);
				//echo var_dump($horaSesion);

				$duracion = $horaActual - $horaSesion;
				if ($duracion < 60) {
					$_SESSION['tiempo'] = date('d-M-Y g:i:s A');
					$retorno= true;
				}
				else
				{
					$_SESSION['dni']=null;
					$_SESSION['id']=null;
					$_SESSION['tipo']=null;
					$_SESSION['tiempo']=null;
					session_destroy();
					$retorno= false;
				}							
			}

			else
			{
				$retorno= false;
			}

			//echo var_dump($duracion);

			return $retorno;
		}
	}
?>