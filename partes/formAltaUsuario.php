<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">          
          <form class="form-horizontal" id="FormAltaUsuario" method="post" onsubmit="GuardarUsuario();return false" enctype="multipart/form-data">
            <!-- Form Name -->
            <legend>Registro de Usuario</legend>

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
            <div id="divmail" class="form-group">
              <label class="col-md-4 control-label" for="txtmail">mail</label>  
              <div class="col-md-4">
              <input id="txtmail" name="txtmail" type="number" min="1000000" max="99999999" placeholder="" class="form-control input-md" required="">
              <span class="help-block">El mail será su usuario.</span>  
              </div>
            </div>

            <!-- Password input-->
            <div id="divClave" class="form-group">
              <label class="col-md-4 control-label" for="txtClave">Clave</label>
              <div class="col-md-4">
                <input id="txtClave" name="txtClave" type="password" placeholder="" class="form-control input-md" required="">
                <span class="help-block">Ingrese su contraseña de ingreso.</span>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtDireccion">Domicilio</label>  
              <div class="col-md-4">
              <input id="txtDireccion" name="txtDireccion" type="text" placeholder="" class="form-control input-md" required="">
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

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtMail">Mail</label>  
              <div class="col-md-4">
              <input id="txtMail" name="txtMail" type="email" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingrese su E-Mail.</span>  
              </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="rbTipo">Tipo</label>
              <div class="col-md-4"> 
                <label class="radio-inline" for="user">
                  <input type="radio" name="rbTipo" id="user" checked="checked">User
                </label>
                <label class="radio-inline" for="admin">
                  <input type="radio" name="rbTipo" id="admin">Admin
                </label>
              </div>
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



