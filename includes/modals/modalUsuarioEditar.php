<div class="modal fade" id="modalUsuarioEditar">
    <div class="modal-dialog">
      <div class="modal-content">
        
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <legend>Editar Usuario</legend>
        </div>
        
        <div class="modal-body">
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
                         <div class="col-md-6 form-group">
                             <?php
                                include 'includes/campos/usuarios/campoUsuarioDireccion.php';
                             ?>
                         </div>
                         
                     </div>
                     
                     <div class="row">
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
                     
                     
                             
                 </fielset>
             </div>

        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
          <a  class="btn btn-success">Aceptar</a>
        </div>
      </div>
    </div>
</div> 