<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'formularios/validacionAltaUsuarioForm.php';

?>

    <div class="container">
        <div class="row">
            
        </div>
        <?php 
            include 'includes/buscar.php';
        ?>
        <div class="col-lg-4"></div>
        <div class="col-lg-5 col-sm-5 text-center">
                <img class="img-circle img-responsive img-center" src="img/user200x200.png" alt="Foto de Manuel Muñoz">
                <h3>Manuel Muñoz</h3>
                <p>Desplegar info usuario</p>
                
                <div class="col-sm-6">
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalUsuarioEditar">Editar</button>    
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-link"><font color="red">Eliminar</font></button>    
                </div>
                
                <?php
                    include 'includes/modals/modalUsuarioEditar.php';
                ?>
                
                

            </div>
    </div>
    
<?php
        include 'includes/footer.php';
?> 
      