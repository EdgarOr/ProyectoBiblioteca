<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'formularios/validacionAltaUsuarioForm.php';
?>


    <div class="page-content-wrapper parcheMargen">
        <div class="row">
           
               <div class="row">
                   <div class="col-md-4">
                        <legend><h2>Alta Préstamo</h2></legend>                        
                    </div>
                    <div class="col-md-3"></div>
                        <div class="col-md-2">
                           <h6>ID Préstamo:</h6>
                            <h6 id="idPrestamo">###</h6>
                        </div>
                </div>

                <div class="row">
                   <div class="col-md-3">
                        <?php
                            include 'includes/campos/usuarios/campoUsuarioClave.php';
                        ?>   
                   </div>                    
                   <div class="col-md-3">
                       <?php
                            include 'includes/campos/prestamos/campoEncargadoClave.php';
                       ?>
                   </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5">
                        <?php
                            include 'includes/campos/libros/campoLibroISBN.php'
                        ?>
                    </div>
                    
                    <div class="col-md-3">
                       <br>
                        <button class="btn btn-link" type="button"> Añadir otro</button>
                    </div>
                </div>
                
                <br><br>
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Título</th>
                                        <th>Autor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1-23-456-7890</td>
                                        <td>El gran libro de Android</td>
                                        <td>Yo</td>
                                    </tr>
                                    <tr>
                                        <td>0-987-654-321</td>
                                        <td>Diseño responsivo</td>
                                        <td>También Yo</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="row ">
                            <button class="btn btn-success center-block" type="button">Aceptar</button><br>
                            <button class="btn btn-info center-block" type="button">Limpiar</button><br>
                            <button class="btn btn-danger center-block" type="button">Eliminar</button><br>
                        </div>
                        
                        
                    </div>
                    
                </div>

               
               
           </div>
            
        </div>
    



<?php
    include 'includes/footer.php';
?>