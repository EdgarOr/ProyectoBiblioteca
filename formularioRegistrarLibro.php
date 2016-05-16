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
                       <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="10 o 13 dígitos" required> 

                        <label for="tituloLibro">Título del libro</label>
                        <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Título del libro" required>

                        <label for="autorLibro">Autor(es)</label>
                        <input type="text" class="form-control" id="autorLibro" name="autorLibro" placeholder="Por ejemplo: Pérez, Juan; Hernández, Pedro" required>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="editorial">Editorial</label>
                                    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Por ejemplo: Santillana" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="editorial">Año</label>
                                    <input type="number" class="form-control" id="año" name="año" min="1930" value="1930">
                                </div>
                            </div>

                                             
                        </div>
                        
                        <div class="form-group">
                            <label for="estante">Estante:</label>
                            <select name="estante" id="estante" class="selectpicker" title="Elija un estante" data-width="150px" required>
                                <option>Estante 1</option>
                                <option>Estante 2</option>
                                <option>Estante 3</option>
                            </select>      
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalEstante"> Añadir otro</button>
                        </div>
                        
                        <!-- MODAL ESTANTE-->
                        
                        <?php
                            include 'includes/modals/modalEstante.php'
                       ?>
                        
                       
                        
                        
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <select name="categoria" id="categoria" class="selectpicker" multiple title="Elija una categoría" data-width="250px">
                                <option>Categoria 1</option>
                                <option>Categoria 2</option>
                                <option>Categoria 3</option>
                                <option>Categoria 4</option>
                                <option>Categoria 5</option>
                            </select>
                            
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalCategoria"> Añadir otro</button>
                        </div>

                        
                         <?php
                            include 'includes/modals/modalCategoria.php'
                        ?>
                        
                        
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" cols="49" rows="6" placeholder="Breve descripción del libro..."></textarea>
                        
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