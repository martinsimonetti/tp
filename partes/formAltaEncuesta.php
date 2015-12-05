<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
  require_once("clases/local.php");

  //session_start();

  $arrayDeLocales=local::TraerTodoLosLocales();
?>

<form class="form-horizontal" id="FormAltaEncuesta" method="post" onsubmit="GuardarEncuesta();return false" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Encuesta</legend>

<!-- Label -->
<div class="form-group" id="fecha" hidden>
  <label class="col-md-4 col-md-offset-2 control-label" for="txtFecha">Fecha</label>  
  <div class="col-md-4">
  <input id="txtFecha" name="txtFecha" type="text" class="form-control input-md">
  </div>
</div>

<!-- Label -->
<div class="form-group" id="usuario" hidden>
  <label class="col-md-4 col-md-offset-2 control-label" for="txtUsuario">Realizó</label>  
  <div class="col-md-4">
  <input id="txtUsuario" name="txtUsuario" type="text" class="form-control input-md">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="cmbLocales">Seleccione un local:</label>
  <div class="col-md-4">
    <select id="cmbLocales" name="cmbLocales" class="form-control">
      <?php
        foreach ($arrayDeLocales as $local) {
          echo "<option value='$local->id'>$local->descripcion</option>";
        }
      ?>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p1">¿Fuiste saludado por los vendedores al entrar al establecimiento?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="p1-0">
      <input type="radio" name="p1" id="p1-0" checked>
      Si
    </label>
	</div>
  <div class="radio">
    <label for="p1-1">
      <input type="radio" name="p1" id="p1-1">
      No
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p2"> ¿Los empleados usaban el uniforme correctamente?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="p2-0">
      <input type="radio" name="p2" id="p2-0" checked>
      Si
    </label>
	</div>
  <div class="radio">
    <label for="p2-1">
      <input type="radio" name="p2" id="p2-1">
      No
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p3">¿Qué tan limpio se encontraba el local?</label>
  <div class="col-md-4">
    <select id="p3" name="p3" class="form-control">
      <option value="Muy sucio">Muy sucio</option>
      <option value="Sucio">Sucio</option>
      <option value="Regular">Regular</option>
      <option value="Limpio">Limpio</option>
      <option value="Muy limpio">Muy limpio</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p4">¿Le fue fácil encontrar el producto buscado?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="p4-0">
      <input type="radio" name="p4" id="p4-0" value="true" checked="checked">
      Si
    </label>
	</div>
  <div class="radio">
    <label for="p4-1">
      <input type="radio" name="p4" id="p4-1" value="false">
      No
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p5">¿Con qué velocidad lo atendieron?</label>
  <div class="col-md-4">
    <select id="p5" name="p5" class="form-control">
      <option value="Muy lento">Muy lento</option>
      <option value="Lento">Lento</option>
      <option value="Regular">Regular</option>
      <option value="Rápido">Rápido</option>
      <option value="Muy rápido">Muy rápido</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p6">¿Con qué productos adicionales cuenta la Farmacia?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="p6-0">
      <input type="checkbox" name="p6" id="p6-0">
      Perfumería
    </label>
	</div>
  <div class="checkbox">
    <label for="p6-1">
      <input type="checkbox" name="p6" id="p6-1">
      Ortopedia
    </label>
	</div>
  <div class="checkbox">
    <label for="p6-2">
      <input type="checkbox" name="p6" id="p6-2">
      Kiosco
    </label>
	</div>
  <div class="checkbox">
    <label for="p6-3">
      <input type="checkbox" name="p6" id="p6-3" onclick="ocultarOtros('p6-3', 'otrosP6')">
      Otros
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="otrosP6"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="otrosP6" name="otrosP6" hidden></textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p7">¿Le ofrecieron algunos de los siguientes elementos?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="p7-0">
      <input type="checkbox" name="p7" id="p7-0">
      Ofertas
    </label>
	</div>
  <div class="checkbox">
    <label for="p7-1">
      <input type="checkbox" name="p7" id="p7-1">
      Promociones
    </label>
	</div>
  <div class="checkbox">
    <label for="p7-2">
      <input type="checkbox" name="p7" id="p7-2">
      Productos genéricos
    </label>
	</div>
  <div class="checkbox">
    <label for="p7-3">
      <input type="checkbox" name="p7" id="p7-3">
      Otros productos
    </label>
	</div>
  <div class="checkbox">
    <label for="p7-4">
      <input type="checkbox" name="p7" id="p7-4" onclick="ocultarOtros('p7-4', 'otrosP7')">
      Otros
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="otrosP7"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="otrosP7" name="otrosP7" hidden></textarea>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p8">¿Le cobraron correctamente, entregándole el ticket?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="p8-0">
      <input type="radio" name="p8" id="p8-0" value="true" checked="checked">
      Si
    </label>
	</div>
  <div class="radio">
    <label for="p8-1">
      <input type="radio" name="p8" id="p8-1" value="false">
      No
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 col-md-offset-2 control-label" for="p9">¿Fuiste saludado al salir del establecimiento?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="p9-0">
      <input type="radio" name="p9" id="p9-0" value="true" checked="checked">
      Si
    </label>
	</div>
  <div class="radio">
    <label for="p9-1">
      <input type="radio" name="p9" id="p9-1" value="false">
      No
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
            <input id="txtId" name="txtId" type="hidden" placeholder="" class="form-control input-md" required="">

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-5 control-label" for="btnBorrar"></label>
              <div class="col-md-4">
                <button id="btnAtras" onclick="Mostrar('GrillaEncuestas'); return false" class="btn btn-primary">Atras</button>
                <button type="reset" id="btnBorrar" name="btnBorrar" class="btn btn-primary">Borrar</button>
                <input type="submit" id="btnAceptar" name="btnAceptar" class="btn btn-primary" value="Aceptar">
              </div>
            </div>
</fieldset>
</form>
<?php   }else {
    echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
    <button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
  }

   ?>