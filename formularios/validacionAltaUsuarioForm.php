<?php
/*
* Patrones de expresiones regulares para validacion de entrada de datos
* Solo aplica para validar en php.
*/

    $expClaveUsuario  = "/^[E,M][0-9]{8}$/";
    $expNombre      = "/^[A-Za-z ÑÁÉÍÓÚñáéíóú]{2,35}$/";
    $expApellido    = "/^[A-Za-z Ñ-ú]{2,45}$/";
    $expRfc         = "/^[A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3}$/";
    $expTelefono    = "/^[0-9]{10,15}$/";
    $expEmail       = "/^[^0-9][A-Za-z0-9_]+([.][A-Za-z0-9_]+)*[@][A-Za-z0-9_]+([.][A-Za-z0-9_]+)*[.][a-zA-Z]{2,4}$/";
    
   
    $errorClaveUsuario = $errorNombreUsuario = $errorApellidoPaterno = $errorApellidoMaterno = $errorEmailUsuario = $errorTelefono1Usuario = $errorTelefono2Usuario ="";
    
    
    $claveUsuario = $apellidoPaterno = $apellidoMaterno = $nombreUsuario = $emailUsuario = $telefono1Usuario = $telefono2Usuario = $direccion = "";

    if(isset($_GET['guardar'])){
        if (empty($_GET["claveUsuario"])) {
            $errorClaveUsuario = "La clave del usuario es OBLIGATORIA, verifique";
        } else {
            $claveUsuario = test_input($_GET["claveUsuario"]);
            if (!preg_match($expClaveUsuario, $claveUsuario)) {
                $errorClaveUsuario = "La clave del usuario no CUMPLE con el formato OBLIGATORIO, verifique";
            }
        } // Cerramos if nocontrol

        if (empty($_GET["nombreUsuario"])) {
            $errorNombreUsuario = "El nombre del usuario es OBLIGATORIO, verifique";
        } else {
            $nombreUsuario = test_input($_GET["nombreUsuario"]);
            if (!preg_match($expNombre, $nombreUsuario)) {
                $errorNombreUsuario = "El nombre no CUMPLE con el formato OBLIGATORIO, verifique";
            }

        } // Cerramos if de nombre
        
         if (empty($_GET["apellidoPaterno"])) {
            $errorApellidoPaterno = "El Apellido Paterno del usuario es OBLIGATORIO, verifique";
        } else {
            $apellidoPaterno = test_input($_GET["apellidoPaterno"]);
            if (!preg_match($expApellido, $apellidoPaterno)) {
                $errorApellidoPaterno = "El Apellido Paterno no CUMPLE con el formato OBLIGATORIO, verifique";
            }

        } // Cerramos if de apellidoPaterno
        
        if (empty($_GET["apellidoMaterno"])) {
            $errorApellidoMaterno = "El nombre del usuario es OBLIGATORIO, verifique";
        } else {
            $apellidoMaterno = test_input($_GET["apellidoMaterno"]);
            if (!preg_match($expApellido, $apellidoMaterno)) {
                $errorApellidoMaterno = "El Apellido Paterno no CUMPLE con el formato OBLIGATORIO, verifique";
            }

        } // Cerramos if de apellidoMaterno
        
        if (empty($_GET["emailUsuario"])) {
            $errorEmailUsuario = "El nombre del usuario es OBLIGATORIO, verifique";
        } else {
            $emailUsuario = test_input($_GET["emailUsuario"]);
            if (!preg_match($expEmail, $emailUsuario)) {
                $errorEmailUsuario = "El email del usuario no CUMPLE con el formato OBLIGATORIO, verifique";
            }

        } // Cerramos if de emailUsuario
        
        if(!empty($_GET["direccion"])){
            $direccion = test_input($_GET["direccion"]);
        }// Cerramos if de direccion
        
        if (empty($_GET["telefono1Usuario"])) {
            $errorTelefono1Usuario = "El teléfono 1 del usuario es OBLIGATORIO, verifique";
        } else {
            $telefono1Usuario= test_input($_GET["telefono1Usuario"]);
            if (!preg_match($expTelefono, $telefono1Usuario)) {
                $errorTelefono1Usuario = "El Teléfono 1 no CUMPLE con el formato OBLIGATORIO, verifique";
            }

        } // Cerramos if de Telefono 1
        
        if (empty($_GET["telefono2Usuario"])) {
            $errorTelefono2Usuario = "El teléfono 2 del usuario es OBLIGATORIO, verifique";
        } else {
            $telefono2Usuario= test_input($_GET["telefono2Usuario"]);
            if (!preg_match($expTelefono, $telefono2Usuario)) {
                $errorTelefono2suario = "El Teléfono 2 no CUMPLE con el formato OBLIGATORIO, verifique";
            }

        } // Cerramos if de Telefono 2
        
        



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