<?php
session_start();
?>

<form class="form-horizontal" onsubmit="GuardarUsuario();return false;" id="FormRegistro" method="post" enctype="multipart/form-data" >
 <fieldset>

  <!-- Form Name -->
  <legend>Registrar Usuario</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtNombre">Nombre:</label>  
    <div class="col-md-4">
      <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su nombre.</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtApellido">Apellido:</label>  
    <div class="col-md-4">
      <input id="txtApellido" name="txtApellido" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su apellido.</span>  
    </div>
  </div>

  <!-- Text input-->
  <div id="divmail" class="form-group">
    <label class="col-md-4 control-label" for="txtEmail">Email:</label>  
    <div class="col-md-4">
      <input id="txtEmail" name="txtEmail" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">El email será su usuario.</span>  
    </div>
  </div>

  <!-- Password input-->
  <div id="divClave" class="form-group">
    <label class="col-md-4 control-label" for="txtClave">Clave:</label>
    <div class="col-md-4">
      <input id="txtClave" name="txtClave" type="password" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su contraseña de ingreso.</span>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtDireccion">Dirección:</label>  
    <div class="col-md-4">
      <input id="txtDireccion" name="txtDireccion" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su dirección.</span>  
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtLocalidad">Localidad:</label>  
    <div class="col-md-4">
      <input id="txtLocalidad" name="txtLocalidad" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su Localidad.</span>  
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
      <span class="help-block">Ingrese su provincia.</span>  
    </div>
  </div>      

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="txtTelefono">Telefono:</label>  
    <div class="col-md-4">
      <input id="txtTelefono" name="txtTelefono" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su telefono de contacto.</span>  
    </div>
  </div>

  <!-- Multiple Radios (inline) -->
  <div class='form-group'
  <?php 
  if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
    {echo "style='display: block'";}
  else
    {echo "style='display: none'";}
  ?>
  >
  <label class='col-md-4 control-label' for='rbTipo'>Tipo</label>
  <div class='col-md-4'> 
   <label class='radio-inline' for='user'>
     <input type='radio' name='rbTipo' id='user' checked='checked'>User
   </label>
   <label class='radio-inline' for='admin'>
     <input type='radio' name='rbTipo' id='admin'>Admin
   </label>
 </div>
</div>

    <!-- Multiple Radios (inline) 
    <div class="form-group">
      <label class="col-md-4 control-label" for="rbSexo">Sexo:</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="sexoF">
          <input type="radio" name="rbSexo" id="sexoF" value="F" checked="checked">
          Femenino
        </label> 
        <label class="radio-inline" for="sexoM">
          <input type="radio" name="rbSexo" id="sexoM" value="M">
          Masculino
        </label>
      </div>
    </div>
  -->
    <!-- File Button  
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">Imagen:</label>
      <div class="col-md-4">
        <input id="txtFoto" name="txtFoto" class="input-file" type="file">
        <br>
              <img id="imgPerfil" name="imgPerfil" src="images/find_user.png" class="col-md-6 col-md-offset-2 fotoform"/>
              <p style="  color: black;" class="col-md-9 col-md-offset-2">*La foto se actualiza al guardar.</p>
      </div>
    </div>
  -->
  <input type="text" hidden id="txtId" name="txtId">
  <!-- Button (Double) -->
  
  <div class="col-md-6 col-md-offset-3 pull-right">       
    <button type="reset" name="btnLimpiar" id="btnLimpiar" class="btn btn-danger">Limpiar</button>
    <button type="submit" name="btnAceptar" class="btn btn-success">Aceptar</button>
    <button onclick="Mostrar('MostrarLogin')" id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
    <br>
  </div>
  

</fieldset>
</form>
