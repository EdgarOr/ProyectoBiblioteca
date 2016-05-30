<?php
    include 'includes/header.php';
    
?>

<div class="container" >
   <div class="col-md-3"></div>

    <div class="col-md-6">
        <form action="WebServicesUsuario.php" id="loginForm" method="post">
            <input type="hidden" name="accion" value=1>
             <label id="loginLabel">
                 <input name="user" type="text" required />
                 <div class="label-text">Usuario</div>
            </label>
            <label id="loginLabel">
                <input name="pass" type="password" required/>
                <div class="label-text">Contraseña</div>
            </label>
            <button id="loginButton" href="home.php">Aceptar</button>
            <br>
            <button class="btn btn-link">¿Olvidó su contraseña?</button>
        </form>    
    </div>

    
</div>


<?php
        include 'includes/footer.php';
?>