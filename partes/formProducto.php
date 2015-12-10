<?php
session_start(); 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
  ?>
  <form class="form-horizontal" id="FormProducto" method="post" onsubmit="GuardarProducto();return false" enctype="multipart/form-data">
    <!-- Form Name -->
    <fieldset>
      <legend>Registro de Producto</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="txtNombre">Nombre:</label>  
        <div class="col-md-4">
          <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required="">
          <span class="help-block">Ingrese nombre del Producto.</span>  
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="txtInfo">Información:</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="txtInfo" name="txtInfo"></textarea>
          <span class="help-block">Ingrese informacion del Producto.</span>  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="txtTipo">Tipo:</label>  
        <div class="col-md-4">
          <input id="txtTipo" name="txtTipo" type="text" placeholder="" class="form-control input-md" required="">
          <span class="help-block">Ingrese tipo del Producto.</span>  
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="txtPrecio">Precio:</label>  
        <div class="col-md-4">
          <input id="txtPrecio" name="txtPrecio" type="number" placeholder="" class="form-control input-md" required="">
          <span class="help-block">Ingrese precio del Producto.</span>  
        </div>
      </div>

      <!-- Text input File Foto-->
      <div class="form-group">
        <input type="file" name="foto" id="foto" class="col-md-9 col-md-offset-2"/>
        <br>
        <img id="imgPerfil" name="imgPerfil" src="fotos/pordefecto.png" class="col-md-6 col-md-offset-2 fotoform"/>
        <p style="  color: black;" class="col-md-9 col-md-offset-2">*La foto se actualiza al guardar.</p>
      </div>
      <!-- Text input-->
      <input id="txtId" name="txtId" type="hidden" placeholder="" class="form-control input-md" required="">

      <!-- Button (Double) -->
      <div class="btn-group pull-right">
        <button id="btnAtras" onclick="Mostrar('Productos'); return false" class="btn btn-danger">Atras</button>
        <button type="reset" id="btnBorrar" name="btnBorrar" class="btn btn-success">Borrar</button>
        <input type="submit" id="btnAceptar" name="btnAceptar" class="btn btn-danger" value="Aceptar">
      </div>
    </fieldset>    
  </form>

  <br>
  <?php   
}
else 
{
  echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
  <button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
}
?>
