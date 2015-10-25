<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Registrar Usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtNombre">Nombre</label>  
  <div class="col-md-4">
  <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Ingrese su nombre.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtApellido">Apellido</label>  
  <div class="col-md-4">
  <input id="txtApellido" name="txtApellido" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Ingrese su apellido.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">Email</label>  
  <div class="col-md-4">
  <input id="txtEmail" name="txtEmail" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">El email será su usuario.</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtClave">Clave</label>
  <div class="col-md-4">
    <input id="txtClave" name="txtClave" type="password" placeholder="" class="form-control input-md" required="">
    <span class="help-block">Ingrese su contraseña de ingreso.</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtDomicilio">Domicilio</label>  
  <div class="col-md-4">
  <input id="txtDomicilio" name="txtDomicilio" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Ingrese su domicilio.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtTelefono">Telefono</label>  
  <div class="col-md-4">
  <input id="txtTelefono" name="txtTelefono" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Ingrese su telefono de contacto.</span>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="rbSexo">Sexo</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="rbSexo-0">
      <input type="radio" name="rbSexo" id="rbSexo-0" value="F" checked="checked">
      F
    </label> 
    <label class="radio-inline" for="rbSexo-1">
      <input type="radio" name="rbSexo" id="rbSexo-1" value="M">
      M
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnCancelar"></label>
  <div class="col-md-8">
    <button id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
    <button id="btnAceptar" name="btnAceptar" class="btn btn-primary">Aceptar</button>
  </div>
</div>

</fieldset>
</form>
