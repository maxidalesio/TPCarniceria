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
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtEmail">Email:</label>  
      <div class="col-md-4">
      <input id="txtEmail" name="txtEmail" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">El email será su usuario.</span>  
      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtClave">Clave:</label>
      <div class="col-md-4">
        <input id="txtClave" name="txtClave" type="password" placeholder="" class="form-control input-md" required="">
        <span class="help-block">Ingrese su contraseña de ingreso.</span>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDomicilio">Domicilio:</label>  
      <div class="col-md-4">
      <input id="txtDomicilio" name="txtDomicilio" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su domicilio.</span>  
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
    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">Imagen:</label>
      <div class="col-md-4">
        <input id="txtFoto" name="txtFoto" class="input-file" type="file">
        <br>
              <img id="imgPerfil" name="imgPerfil" src="img/find_user.png" class="col-md-6 col-md-offset-2 fotoform"/>
              <p style="  color: black;" class="col-md-9 col-md-offset-2">*La foto se actualiza al guardar.</p>
      </div>
    </div>
    <input type="text" hidden id="idUsuario" name="idUsuario">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="btnCancelar"></label>
      <div class="col-md-8">
        <button onclick="Mostrar('Home')" id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
        <button type="reset" name="btnLimpiar" id="btnLimpiar" class="btn btn-warning">Limpiar</button>
        <button name="btnAceptar" class="btn btn-primary">Aceptar</button>
      </div>
    </div>

  </fieldset>
</form>
