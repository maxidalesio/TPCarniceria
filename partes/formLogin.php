<?php 
session_start();
if(!isset($_SESSION['mail'])){ 
  ?>
    <div id="formLogin" class="col-md-6 col-md-offset-3">      
      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus Datos</h2>        
          <label for="mail" class="sr-only">mail</label>
          <input type="text" id="mail" class="form-control" placeholder="Mail" required="" autofocus=""
          <?php 
            if(isset($_COOKIE['mail']))
              {echo "value='".$_COOKIE['mail']."'";}
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
      <button class="btn btn-lg btn-primary btn-block" style="background-color:blue" onclick="Mostrar('MostrarRegistro')">Registrarme</button>
      <br>
    </div>
     <!-- /container -->
<?php  }  ?>
    
  
