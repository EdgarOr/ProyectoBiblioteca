<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
error_reporting(0);
ini_set('error_reporting', E_ALL);
require './Tabla.php';

$estant=$_POST['clave'];
$Est = new Tabla(TABLA_ESTANTES);
$Est->conectar();
$Est->select_database();
$Est->set(NOMBRE_ESTANTE, $estant);
$res=$Est->insertar();
$Est->close();
if ($res == "1") {
    echo '<script language="javascript">alert("La categoría se guardó correctamente.");</script>';
    header("Location: http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
} else {
    echo '<script language="javascript">alert("Hubo un error al guardar La categoría.");</script>';
}
