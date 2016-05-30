<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
?>


    <div id="page-content-wrapper">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-5">
           
            <form action="">
                
                   <fieldset>
                       <legend> <h2> Editar </h2> </legend>
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
                           
                           <div class="table-responsive">
                                <table class="table table-hover" id="infoLibro" name="infoLibro">
                                    <thead>
                                        <tr >
                                            <th>ISBN</th>
                                            <th>Título</th>
                                            <th>Autor(es)</th>
                                            <th>Editorial</th>
                                            <th>Categoría</th>
                                            <th>Descripción</th>
                                            <th>Año</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                           
                       </div>
                           
                       
                       <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-info center-block" type="button" data-toggle="modal" data-target="#modalAnadirEjemplar"> Añadir Ejemplar</button>
                                
                            </div>   
                            <div class="col-md-4">
                                <button class="btn btn-warning center-block" type="button" data-toggle="modal" data-target="#modalEditarEjemplar"> Editar</button>
                                
                            </div>
                            
                            <div class="col-md-4">
                                <button class="btn btn-danger center-block" type="button" data-toggle="modal" data-target="#modalEditarEjemplar"> Eliminar</button>
                                
                            </div>
                     </div>
                            
                            <?php
                                include 'includes/modals/modalAnadirEjemplar.php';
                                include 'includes/modals/modalEditarEjemplar.php';
                            ?>
                    </fieldset>
                    
               
                
                
            </form>
        </div>
    </div>

<?php
    include 'includes/footer.php';
?>