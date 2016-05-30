<?php

require './Tabla.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Encargado
 *
 * @author Adrián
 */
class Encargado extends Tabla {
    
    public function __construct() {
        parent::__construct(TABLA_ENCARGADO);
    }
    
    public function verEncargados() {
        return $this->query(utf8_decode("select * from encargado;"));
    }
    
    public function login($user, $password) {
        $login = "select count(*) as login " .
                "from encargado " .
                "where claveEncargado='" . $user . "' and contrasenaEncargado='" . $password . "';";
        echo $login;
        return $this->query($login);
    }
    
    public function nombreEncargado($user) {
        $query = "select concat(concat(concat(concat(nombreEncargado, ' '), apellidoPE),' '),apellidoME) As Nombre_Completo " .
                "from encargado " .
                "where claveEncargado='" . $user . "';";
        return $this->query(utf8_decode($query));
    }
    
    public function obtener_Contraseña($correo) {
        $contrasena = "select contrasenaEncargado as password " .
                "from encargado " .
                "where emailEncargado ='" . $correo . "';";
        return $this->query($contrasena);
    }
    
}
