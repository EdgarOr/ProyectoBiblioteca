<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'formularios/validacionAltaUsuarioForm.php';
?>

<div class="page-content-wrapper">
    
     <div class="col-md-2"></div> 
     <div class="col-md-8">
         <form action="formularioAltaUsuario.php" method="get">
             <div class="form-group">
                 <fielset>
                     <legend><h2> Registrar Usuario</h2></legend>
                     
                     <div class="row">
                         <div class="col-md-7 form-group">
                            <label for="claveUsuario">Clave del usuario</label>
                            <input type="text" class="form-control" id="claveUsuario" name="claveUsuario" placeholder="Matrícula de la institución, RFC, Núm. control..."  value="<?php echo $claveUsuario; ?>" />
                            <span class="errorPattern"><?php echo $errorClaveUsuario; ?></span>
                         </div>
                         
                     </div>
                     
                     <div class="row">
                         <div class="col-md-4 form-group">
                             <label for="apellidoPaterno">Apellido Paterno del Usuario</label>
                             <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno"  placeholder="Por ejemplo: Pérez" value="<?php echo $apellidoPaterno; ?>" />
                             <span class="errorPattern"><?php echo $errorApellidoPaterno;?></span>
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="apellidoMaterno">Apellido Materno del Usuario</label>
                             <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" placeholder="Por ejemplo: Hernández" value="<?php echo $apellidoMaterno; ?>" />
                             <span class="errorPattern"><?php echo $errorApellidoMaterno;?></span>
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="nombre">Nombre(s) del Usuario</label>
                             <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Por ejemplo: Juan Luis" value="<?php echo $nombreUsuario; ?>" />
                             <span class="errorPattern"><?php echo $errorNombreUsuario; ?></span>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-4 form-group">
                             <label for="emailUsuario">Email del Usuario</label>
                             <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="juan.perez@email.com" value="<?php echo $emailUsuario; ?>" /> 
                             <span class="errorPattern"><?php echo $errorEmailUsuario; ?></span>
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="telefono1Usuario">Teléfono 1 del Usuario</label>
                             <input type="tel" class="form-control" id="telefono1Usuario" name="telefono1Usuario" placeholder="2299112233 (Opcional)" value="<?php echo $telefono1Usuario; ?>"> 
                             <span class="errorPattern"><?php echo $errorTelefono1Usuario; ?></span>
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="telefono2Usuario">Teléfono 2 del Usuario</label>
                             <input type="tel" class="form-control" id="telefono2Usuario" name="telefono2Usuario" placeholder="2299112233 (Opcional)" value="<?php echo $telefono2Usuario; ?>"> 
                             <span class="errorPattern"><?php echo $errorTelefono2Usuario; ?></span>
                         </div>                        
                     </div>
                     
                     <div class="col-md-5"></div>
                     <button class="cleanButton" id="limpiar" name="limpiar">Limpiar</button>
                     <button class="saveButton" id="guardar" name="guardar">Guardar</button>
                             
                 </fielset>
             </div>
         </form>
         
     </div>
</div>

   <?php
    include 'includes/footer.php';
?>