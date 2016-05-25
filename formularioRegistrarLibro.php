<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
?>


    <div id="page-content-wrapper">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-5">
           
            <form action="">
                <div class="form-group">
                   <fieldset>
                       <legend> <h2> Alta libro </h2> </legend>
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
                        
                        
                        
                        
                        <div class="col-sm-4"></div>
                        <form action="" class="form-group">
                            <button class="cleanButton">Limpiar</button>
                            <button class="saveButton">Guardar</button>
                            
                        </form>
                                                        
                   </fieldset>
                   <hr>
                    
                </div>
            </form>
        </div>

    </div>
    



<?php
    include 'includes/footer.php';
?>