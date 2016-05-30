<?php

require './Tabla.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Adrián
 */
class Usuario extends Tabla {
    
    public function __construct() {
        parent::__construct(TABLA_USUARIOS);
    }
    
    public function verUsuarios() {
        return $this->query(utf8_decode("select * from usuario;"));
    }
    
    public function login($user, $password) {
        $login = "select count(*) as login " .
                "from usuario " .
                "where claveUsuario='" . $user . "' and contrasenaUsuario='" . $password . "';";
        echo $login;
        return $this->query($login);
    }
    
    public function nombreUsuario($user) {
        $query = "select concat(concat(concat(concat(nombreUsuario, ' '), apellidoPU),' '),apellidoMU) As Nombre_Completo " .
                "from usuario " .
                "where claveUsuario='" . $user . "';";
        return $this->query(utf8_decode($query));
    }
    
    public function obtener_Contraseña($correo) {
        $contrasena = "select contrasenaUsuario as password " .
                "from usuario " .
                "where emailUsuario ='" . $correo . "';";
        return $this->query($contrasena);
    }
    
}
