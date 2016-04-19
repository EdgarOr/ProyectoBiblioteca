<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
?>

<div class="page-content-wrapper">
    
     <div class="col-md-2"></div> 
     <div class="col-md-8">
         <form action="">
             <div class="form-group">
                 <fielset>
                     <legend><h2> Registrar Usuario</h2></legend>
                     
                     <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="claveUsuario">Clave del usuario</label>
                            <input type="text" class="form-control" id="claveUsuario" placeholder="Matrícula de la institución, RFC, Núm. control..." required>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-4 form-group">
                             <label for="apellidoPaterno">Apellido Paterno del Usuario</label>
                             <input type="text" class="form-control" id="apellidoPaterno" placeholder="Por ejemplo: Pérez" required>
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="apellidoMaterno">Apellido Materno del Usuario</label>
                             <input type="text" class="form-control" id="apellidoMaterno" placeholder="Por ejemplo: Hernández" required>
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="nombre">Nombre(s) del Usuario</label>
                             <input type="text" class="form-control" id="nombre" placeholder="Por ejemplo: Juan Luis" required>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-4 form-group">
                             <label for="emailUsuario">Email del Usuario</label>
                             <input type="email" class="form-control" id="emailUsuario" placeholder="juan.perez@email.com" required> 
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="telefono1lUsuario">Teléfono 1 del Usuario</label>
                             <input type="tel" class="form-control" id="telefono1lUsuario" placeholder="2299112233 (Opcional)"> 
                         </div>
                         <div class="col-md-4 form-group">
                             <label for="telefono2lUsuario">Teléfono 2 del Usuario</label>
                             <input type="tel" class="form-control" id="telefono2lUsuario" placeholder="2299112233 (Opcional)"> 
                         </div>                        
                     </div>
                     
                     <div class="col-md-5"></div>
                     <button class="weaButton">Limpiar</button>
                     <button class="saveButton">Guardar</button>
                             
                 </fielset>
             </div>
         </form>
         
     </div>
</div>

   <?php
    include 'includes/footer.php';
?>