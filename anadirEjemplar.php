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
                       <legend> <h2> Añadir Ejemplar </h2> </legend>
                       <div class="row">
                           <div class="col-md-4 form-group">
                               <?php
                                    include 'includes/campos/libros/campoLibroISBN.php';
                               ?> 
            
                           </div>
                           
                           <div class="col-md-5 form-group">
                               <?php
                                    include 'includes/campos/libros/campoLibroTitulo.php';
                               ?>
                               
                           </div>
                           
                           <div class="col-md-3 form-group">
                               <?php
                                    include 'includes/campos/libros/campoLibroCategoria.php';
                               ?>
                           </div>
                       </div>
                       
                       <div class="row text-center">
                           <button type="button" class="btn cleanButton pull-center">Buscar</button>
                       </div>
                       
                       <div class="row">
                           <div class="col-md-8">
                              <?php
                                    include 'includes/campos/libros/campoAnhadirInfo.php';
                               ?>
                           </div>
                           <div class="col-md-2">
                               
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalAnadirEjemplar"> Añadir</button>
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalEditarEjemplar"> Editar</button>
                            
                            <?php
                                include 'includes/modals/modalAnadirEjemplar.php';
                                include 'includes/modals/modalEditarEjemplar.php';
                            ?>
                            
                            
                           </div>
                           
                       </div>
                    </fieldset>
                    
                </div>
                
                
            </form>
        </div>
    </div>

<?php
    include 'includes/footer.php';
?>