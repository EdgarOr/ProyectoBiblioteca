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

//Insertar Categoria
$nombre = $_POST['nombre'];
$Estante = new Tabla(TABLA_CATEGORIAS);
$Estante->conectar();
$Estante->select_database();
$Estante->set(NOMBRE_CATEGORIA, $nombre);
$result = $Estante->insertar();
$Estante->close();
if ($result == "1") {
    echo '<script language="javascript">alert("La categoría se guardó correctamente.");</script>';
    header("Location: http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
} else {
    echo '<script language="javascript">alert("Hubo un error al guardar La categoría.");</script>';
}
