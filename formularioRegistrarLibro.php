<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
?>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-5">
           
            <form action="" class="form">
                <div class="form-group">
                   <fieldset>
                       <legend> Alta libro </legend>
                       <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="10 o 13 dígitos"> 

                        <label for="tituloLibro">Título del libro</label>
                        <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Título del libro">

                        <label for="autorLibro">Autor(es)</label>
                        <input type="text" class="form-control" id="autorLibro" name="autorLibro" placeholder="Por ejemplo: Pérez, Juan; Hernández, Pedro">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="editorial">Editorial</label>
                                    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Por ejemplo: Santillana">
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
                            <select name="estante" id="estante">
                                <option>Elija un estante</option>
                                <option>Estante 1</option>
                                <option>Estante 2</option>
                                <option>Estante 3</option>
                            </select>      
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalEstante"> Añadir otro</button>
                        </div>
                        
                        <!-- MODAL ESTANTE-->
                        <div class="modal fade" id="modalEstante">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title">Añadir estante</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="email">Estante:</label>
                                    <input class="form-control" id="text" placeholder="Introduzca la clave del estante" type="text">
                                    
                                    <ul class="list-group">
                                        <li class="list-group-item">Item 1</li>
                                        <li class="list-group-item">Item 2</li>
                                        <li class="list-group-item">Item 3</li>
                                    </ul>

                                  </div>
                                  
                                </div>
                                <div class="modal-footer">
                                  <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                                  <a href="#" class="btn btn-success">Aceptar</a>
                                </div>
                              </div>
                            </div>
                        </div> 
                        
                        
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <select name="categoria" id="categoria" >
                                <option>Elija una categoría</option>
                                <option>Categoria 1</option>
                                <option>Categoria 2</option>
                            </select>
                            
                            <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#modalCategoria"> Añadir otro</button>
                        </div>
                        
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" cols="73" rows="6"></textarea>
                        
                        
                        <div class="col-sm-4">
                           
                        </div>
                         <button class="btn btn-info">Limpiar</button>
                            <button class="btn btn-success">Guardar</button>
                                
                        
                   </fieldset>
                   <hr>
                    
                </div>
            </form>
        </div>

    </div>
    



<?php
    include 'includes/footer.php';
?>