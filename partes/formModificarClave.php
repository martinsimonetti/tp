<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">          
          <form class="form-horizontal" id="FormModificarClave" method="post" onsubmit="GuardarContraseña();return false" enctype="multipart/form-data">
            <!-- Form Name -->
            <legend>Cambio de contraseña</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtClaveActual">Contraseña actual</label>  
              <div class="col-md-4">
              <input id="txtClaveActual" name="txtClaveActual" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese contraseña actual.</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtClaveNueva">Contraseña nueva</label>  
              <div class="col-md-4">
              <input id="txtClaveNueva" name="txtClaveNueva" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese contraseña nueva.</span>  
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtClaveNueva2">Reingrese la nueva contraseña</label>  
              <div class="col-md-4">
              <input id="txtClaveNueva2" name="txtClaveNueva2" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Reingrese contraseña nueva.</span>  
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnBorrar"></label>
              <div class="col-md-8">
                <button id="btnAtras" onclick="Mostrar('GrillaLocales'); return false" class="btn btn-primary">Atras</button>
                <button type="reset" id="btnBorrar" name="btnBorrar" class="btn btn-primary">Borrar</button>
                <input type="submit" onclick="return ValidarClavesIguales();" id="btnAceptar" name="btnAceptar" class="btn btn-primary" value="Aceptar">
              </div>
            </div>    
        </form>
    </div>
  </div>
</div>

<?php   }else {
    echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
    <button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
  }
?>