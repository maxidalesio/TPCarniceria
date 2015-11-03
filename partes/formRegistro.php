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
      <label class="col-md-4 control-label" for="txtDomicilio">Dirección:</label>  
      <div class="col-md-4">
      <input id="txtDireccion" name="txtDireccion" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su dirección.</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDomicilio">Localidad:</label>  
      <div class="col-md-4">
      <input id="txtLocalidad" name="txtLocalidad" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su Localidad.</span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDomicilio">Provincia:</label>  
      <div class="col-md-4">
      <input id="txtProvincia" name="txtProvincia" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block">Ingrese su Provincia.</span>  
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
        session_start();
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
    
    <div class="col-md-6 col-md-offset-3">       
        <button type="reset" name="btnLimpiar" id="btnLimpiar" class="btn btn-lg btn-primary btn-block">Limpiar</button>
        <button type="submit" name="btnAceptar" class="btn btn-lg btn-success btn-block">Aceptar</button>
        <button onclick="Mostrar('MostrarLogin')" id="btnCancelar" name="btnCancelar" class="btn btn-lg btn-primary btn-block">Cancelar</button>
        <br>
    </div>
    

  </fieldset>
</form>
