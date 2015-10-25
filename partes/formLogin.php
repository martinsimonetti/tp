<?php 
session_start();
if(!isset($_SESSION['dni'])){ 
  ?>
    <div id="formLogin" class="col-md-12 col-md-offset-1">      
      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus Datos</h2>        
          <label for="dni" class="sr-only">dni</label>
          <input type="number" min="1000000" max="99999999" id="dni" class="form-control" placeholder="DNI" required="" autofocus=""
          <?php 
            if(isset($_COOKIE['dni']))
              {echo "value='".$_COOKIE['dni']."'";}
          ?>>
          <label for="clave" class="sr-only">clave</label>
          <input type="password" id="clave" class="form-control" placeholder="Contraseña" required="" autofocus="">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="recordarme" checked> Recordame
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
    </div> <!-- /container -->
<?php  }  ?>
    
  
