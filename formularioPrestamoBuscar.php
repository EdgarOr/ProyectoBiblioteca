<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'formularios/validacionAltaUsuarioForm.php';
?>


<div id="page-content-wrapper parcheMargen">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <form action="">
            <div class="row">
                   <legend> <h2> Buscar Préstamo </h2> </legend>
                   <div class="row">
                       <div class="col-md-4">
                           <?php
                                include 'includes/campos/prestamos/campoPrestamoClave.php';
                           ?>
                       </div>
                       <div class="col-md-4">
                           <?php
                                include 'includes/campos/usuarios/campoUsuarioClave.php';
                           ?>
                       </div>
                       <div class="col-md-4">
                           <?php
                                include 'includes/campos/prestamos/campoPrestamoFecha.php';
                           ?>
                       </div>
                                              
                   </div>
                   
                   <div class="row">
                       <button class="cleanButton center-block">Buscar</button>
                   </div>
                   
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-hover" >
                                <thead>
                                    <tr >
                                        <th>ID Prestamo</th>
                                        <th>Usuario</th>
                                        <th>Fecha</th>
                                        <th>Libros</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-toggle="modal" data-target="#modalPrestamo">
                                        <td>P2205161030</td>
                                        <td>Usuario random</td>
                                        <td>22-05-2016</td>
                                        <td>Web, Android</td>
                                    </tr>
                                    <tr data-toggle="modal" data-target="#modalPrestamo">
                                        <td>P2206161030</td>
                                        <td>Charlie</td>
                                        <td>22-06-2016</td>
                                        <td>Android, Web</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                        
                        <?php
                            include 'includes/modals/modalPrestamo.php';
                        ?>
                    </div>
                   
                   
               
            </div>
        </form>
    </div>
</div>
