<?php

require './Tabla.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Libro
 *
 * @author Adrián
 */
class Libro extends Tabla {
    
    public function __construct() {
        parent::__construct(TABLA_LIBROS);
        echo 'Constructor';
    }
    
    public function verLibros() {
        return $this->query(utf8_decode("select * from libro;"));
    }
    
    public function buscarLibroPorID ($id) {
        $libro = "select * from libro where isbn = ".$id.";";
        return $this->query(utf8_decode($libro));
    }
    
    public function buscarLibroPorNombre ($nombre) {
        $libro = "select * from libro where nombreLibro = ".$nombre.";";
        return $this->query(utf8_decode($libro));
    }
    
    public function buscarLibroPorAutor ($autor) {
        $libro = "select * from libro where autorLibro = ".$autor.";";
        return $this->query(utf8_decode($libro));
    }
    
    public function libroDisponible ($isbn) {
        $libroDisponible = "select count(*) as disponible from ";
        return $this->query(utf8_decode($libroDisponible));
    }
    
}
