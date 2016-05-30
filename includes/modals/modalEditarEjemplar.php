<div class="modal fade" id="modalEditarEjemplar">
    <div class="modal-dialog">
      <div class="modal-content">
        
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <legend>Editar Ejemplar</legend>
        </div>
        
        <div class="modal-body">
          <div class="form-group">
           
            <form action="" method="post">
                <div class="form-group">
                   <fieldset>
                       
                       <?php
                        include 'includes/campos/libros/campoLibroISBN.php';
                        include 'includes/campos/libros/campoLibroTitulo.php';
                        include 'includes/campos/libros/campoLibroAutor.php';
                       ?>
                        

                        
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                   <?php
                                        include 'includes/campos/libros/campoLibroEditorial.php';
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <?php
                                        include 'includes/campos/libros/campoLibroAnho.php';
                                    ?>
                                </div>
                            </div>

                                             
                        </div>
                        
                        <div class="form-group">
                            <?php
                                include 'includes/campos/libros/campoLibroEstante.php';
                            ?>   
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalEstante"> Añadir otro</button>
                        </div>
                        
                        <!-- MODAL ESTANTE-->
                        
                        <?php
                            include 'includes/modals/modalEstante.php'
                       ?>
                        
                       
                        
                        
                        <div class="form-group">
                           <?php
                                include 'includes/campos/libros/campoLibroCategoria.php';
                            ?>  
                            
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalCategoria"> Añadir otro</button>
                        </div>
                        <!-- MODAL CATEGORÍA-->
                        
                         <?php
                            include 'includes/modals/modalCategoria.php';
                            include 'includes/campos/libros/campoLibroDescripcion.php';
                        ?>
                        
                        
                        
                        
                       
                                                        
                   </fieldset>
                   <hr>
                    
                </div>
            </form>
        </div>
                        

        </div>
        
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
          <a href="#" class="btn btn-success">Aceptar</a>
        </div>
        
      </div>
    </div>
</div> 