<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
?>

<div class="container" id>
   <div class="col-md-3"></div>

    <div class="col-md-6">
         <form id="loginForm">
             <label id="loginLabel">
                 <input type="text" required />
                 <div class="label-text">Usuario</div>
            </label>
            <label id="loginLabel">
                <input type="password" required />
                <div class="label-text">Contraseña</div>
            </label>
            <button id="loginButton">Aceptar</button>
            <br>
            <button class="btn btn-link">¿Olvidó su contraseña?</button>
        </form>    
    </div>

    
</div>


<?php
        include 'includes/footer.php';
?>