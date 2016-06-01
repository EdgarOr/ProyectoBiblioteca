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

//Insertar estante
$nombre = $_POST['clave'];
echo $nombre;
$Estante = new Tabla(TABLA_ESTANTES);
$Estante->conectar();
$Estante->select_database();
$Estante->set(NOMBRE_ESTANTE, $nombre);
$result = $Estante->insertar();
$Estante->close();
if ($result == "1") {
    echo '<script language="javascript">alert("El estante se guardó correctamente.");</script>';
    header("Location: http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
} else {
    echo '<script language="javascript">alert("Hubo un error al guardar el estante.");</script>';
}

