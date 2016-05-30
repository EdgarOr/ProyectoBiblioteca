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
$opcion = $_POST['accion'];
switch ($opcion) {
    //Ver categorías
    case 1:
        $id=$_POST['clave'];
        $nombre=$_POST['clave'];
        $Categoria = new Tabla(TABLA_ESTANTES);   
        $Categoria->conectar();
        $Categoria->select_database();
        $Categoria->set(ID_ESTANTE, $id);
        $Categoria->set(NOMBRE_ESTANTE, $nombre);
        $result=$Categoria->insertar();
        $Categoria->close();
        if($result=="1") {
            echo '<script language="javascript">alert("El estante se guardó correctamente.");</script>';
        } else {
            echo '<script language="javascript">alert("Hubo un error al guardar el estante.");</script>';
        }
        break;

    default:
        $Categorias = new Tabla(TABLA_ESTANTES);
        $Categorias->conectar();
        $Categorias->select_database();
        $query = 'select * from ' . $Categorias->nombre_Table() . ';';
        $result = $Categorias->query($query);
        $json = array();
        while ($row1 = mysqli_fetch_array($result)) {
            $json[] = [ID_ESTANTE => $row1[ID_ESTANTE],
                NOMBRE_ESTANTE => utf8_encode($row1[NOMBRE_ESTANTE]),];
        }
        echo json_encode(array_values($json));
        $t_Idiomas->close();
        break;
}
