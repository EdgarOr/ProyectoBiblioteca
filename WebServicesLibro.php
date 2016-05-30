<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ob_start();
ini_set('display_errors', 'Off');
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
error_reporting(0);
ini_set('error_reporting', E_ALL);
require './Tabla.php';

$opcion = $_POST['accion'];

switch ($opcion) {
    //Alta de libro
    case 1:
//        echo 'entre';
        $isbn = $_POST[ID_Libro];
        $nombreLibro = $_POST[NOMBRE_LIBRO];
        $autorLibro = $_POST[AUTOR_LIBRO];
        $editorial = $_POST[EDITORIAL];
        $estante = '1';
        $categoria = 'N';
        $descripcion = $_POST[DESCRIPCION];
        $anio = $_POST[ANIO];
        $query = $isbn.' '.$nombreLibro.' '.$autorLibro.' '.$editorial.' '.$estante.' '.$categoria.' '.$descripcion.' '.$anio;
//        echo $query;
        $Libro = new Tabla(TABLA_LIBROS);
//        echo 'cree';
        $Libro ->conectar();
        $Libro ->select_database();
//        echo 'conecte';
        $Libro->set(ID_Libro, $isbn);
        $Libro->set(NOMBRE_LIBRO,$nombreLibro);
        $Libro->set(EDITORIAL, $editorial);
        $Libro->set(ESTANTE, $estante);
        $Libro->set(CATEGORIA, $categoria);
        $Libro->set(DESCRIPCION, $descripcion);
        $Libro->set(ANIO, $anio);
        $result=$Libro->insertar();
        $Libro->close();
        if($result=="1") {
            echo '<script language="javascript">alert("El libro se guardó correctamente.");</script>';
            header("http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
        } else {
            echo '<script language="javascript">alert("Hubo un error al guardar el libro.");</script>';
            header("http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
        }
        break;

    default:
        break;
}