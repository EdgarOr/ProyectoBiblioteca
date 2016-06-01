<?php
$expCategoria = "/^[A-Z][a-zÑÁÉÍÓÚñáéíóú]{5,20}$/";
$errorCategoria = $categoria ="";

if(isset($_GET['aceptar'])){
    if (empty($_GET["nombre"])) {
            $errorCategoria = "¡Error, nombre de la categoría está vacío!";
        } else {
            $categoria = test_input($_GET["nombre"]);
            if (!preg_match($expCategoria, $categoria)) {
                $errorCategoria = "El nombre de categoría debe de iniciar en mayúsculas seguido de minúsculas.";
            }
        } // Cerramos if nocontrol
        
}

 /*
    * Depura el dato capturado por el usuario
    */
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


?>


<div class="modal fade" id="modalCategoria">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <label for="email">Categoría:</label>
                <form action="WebServicesCategorias.php" method="post" id="formCat">
                    <input name="nombre" id="nombre" class="form-control" id="text" placeholder="Introduzca la nueva categoría" type="text" value="<?php echo $categoria; ?>" />
                    <span class="errorPattern"><?php echo $errorCategoria; ?></span>
                
                </form>
            </div>
            <div class="modal-body">
                <div class="form-group">

                    <ul class="list-group">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>

                </div>

            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                <button name="aceptar" id="aceptar" class="btn btn-success" type="submit" form="formCat">Aceptar</button>
            </div>
        </div>
    </div>
</div> 
