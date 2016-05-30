<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'formularios/validacionAltaUsuarioForm.php';
?>

<div class="page-content-wrapper">
    
     <div class="col-md-2"></div> 
     <div class="col-md-8">
         <legend><h2> Registrar Usuario</h2></legend>
         <form action="WebServicesUsuario.php" method="post">
             <div class="form-group">
                 <fielset>
                     <input type="hidden" name="accion" value=2>
                     <div class="row">
                         <div class="col-md-7 form-group">
                            <?php
                                include 'includes/campos/usuarios/campoUsuarioClave.php';
                             ?>
                         </div>
                         
                     </div>
                     
                     <div class="row">
                         <div class="col-md-4 form-group">
                            <?php
                                include 'includes/campos/usuarios/campoUsuarioPaterno.php';
                             ?>
                             
                         </div>
                         <div class="col-md-4 form-group">
                             <?php
                                include 'includes/campos/usuarios/campoUsuarioMaterno.php';
                             ?>
                         </div>
                         <div class="col-md-4 form-group">
                            <?php
                                include 'includes/campos/usuarios/campoUsuarioNombre.php';
                             ?>                             
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-4 form-group">
                            <?php
                                include 'includes/campos/usuarios/campoUsuarioEmail.php';
                             ?>                               
                         </div>
                         <div class="col-md-4 form-group">
                             <?php
                                include 'includes/campos/usuarios/campoUsuarioTelefono1.php';
                             ?>                             
                         </div>
                         <div class="col-md-4 form-group">
                             <?php
                                include 'includes/campos/usuarios/campoUsuarioTelefono2.php';
                             ?>
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