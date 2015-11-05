<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">          
          <form class="form-horizontal" id="FormAltaLocal" method="post" onsubmit="GuardarProducto();return false" enctype="multipart/form-data">
            <!-- Form Name -->
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
             <span class="help-block">Ingrese descripción del Producto.</span>  
             </div>
         </div>

         <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="txtNombre">Tipo:</label>  
            <div class="col-md-4">
            <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required="">
            <span class="help-block">Ingrese tipo del Producto.</span>  
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
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnBorrar"></label>
              <div class="col-md-8">
                <button id="btnAtras" onclick="Mostrar('GrillaLocales'); return false" class="btn btn-primary">Atras</button>
                <button type="reset" id="btnBorrar" name="btnBorrar" class="btn btn-primary">Borrar</button>
                <input type="submit" id="btnAceptar" name="btnAceptar" class="btn btn-primary" value="Aceptar">
              </div>
            </div>    
        </form>
    </div>
  </div>
</div>