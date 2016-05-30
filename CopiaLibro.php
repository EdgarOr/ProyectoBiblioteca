<?php

require './Tabla.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CopiaLibro
 *
 * @author Adrián
 */
class CopiaLibro extends Tabla {
    
    public function __construct() {
        parent::__construct(TABLA_COPIA_LIBRO);
    }
    
    public function verCopias() {
        return $this->query(utf8_decode("select * from copia_libro;"));
    }
    
}
