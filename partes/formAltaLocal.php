<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">          
          <form class="form-horizontal" id="FormAltaLocal" method="post" onsubmit="GuardarLocal();return false" enctype="multipart/form-data">
            <!-- Form Name -->
            <legend>Registro de Local</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtDescripcion">Descripción</label>  
              <div class="col-md-4">
              <input id="txtDescripcion" name="txtDescripcion" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese descripción o nombre del local.</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtDireccion">Domicilio</label>  
              <div class="col-md-4">
              <input id="txtDireccion" name="txtDireccion" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese domicilio.</span>  
              </div>
            </div>

            <!-- Select Provincias-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtProvincia">Provincia</label>  
              <div class="col-md-4">
              <select id="txtProvincia" name="txtProvincia" class="form-control input-md">
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="CABA">CABA</option>
                <option value="Catamarca">Catamarca</option>
                <option value="Chaco">Chaco</option>
                <option value="Chubut">Chubut</option>
                <option value="Córdoba">Córdoba</option>
                <option value="Corrientes">Corrientes</option>
                <option value="Entre Ríos">Entre Ríos</option>
                <option value="Formosa">Formosa</option>
                <option value="Jujuy">Jujuy</option>
                <option value="La Pampa">La Pampa</option>
                <option value="La Rioja">La Rioja</option>
                <option value="Mendoza">Mendoza</option>
                <option value="Misiones">Misiones</option>
                <option value="Neuquén">Neuquén</option>
                <option value="Río Negro">Río Negro</option>
                <option value="Salta">Salta</option>
                <option value="San Juan">San Juan</option>
                <option value="San Luis">San Luis</option>
                <option value="Santa Cruz">Santa Cruz</option>
                <option value="Santa Fe">Santa Fe</option>
                <option value="Santiago del Estero">Santiago del Estero</option>
                <option value="Tierra del Fuego">Tierra del Fuego</option>
                <option value="Tucumán">Tucumán</option>
              </select>
              <span class="help-block">Ingrese provincia.</span>  
              </div>
            </div>            

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtLocalidad">Localidad</label>  
              <div class="col-md-4">
              <input id="txtLocalidad" name="txtLocalidad" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese localidad.</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtTelefono">Teléfono</label>  
              <div class="col-md-4">
              <input id="txtTelefono" name="txtTelefono" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese teléfono.</span>  
              </div>
            </div>

            <!-- Text input File Foto-->
            <div class="form-group">
              <input type="file" name="foto" id="foto" class="col-md-9 col-md-offset-2"/>
              <br>
              <img id="imgPerfil" src="fotos/pordefecto.png" class="col-md-6 col-md-offset-2 fotoform"/>
              <p style="  color: black;" class="col-md-9 col-md-offset-2">*La foto se actualiza al guardar.</p>
            </div>
            <!-- Text input-->
            <input id="txtId" name="txtId" type="hidden" placeholder="" class="form-control input-md" required="">

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnBorrar"></label>
              <div class="col-md-8">
                <button type="reset" id="btnBorrar" name="btnBorrar" class="btn btn-primary">Borrar</button>
                <input type="submit" id="btnAceptar" name="btnAceptar" class="btn btn-primary" value="Aceptar">
              </div>
            </div>    
        </form>
    </div>
  </div>
</div>