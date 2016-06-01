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

//        echo $query;
        $Libro = new Tabla(TABLA_LIBROS);
//        echo 'cree';
        $Libro->conectar();
        $Libro->select_database();
//        echo 'conecte';
        $Libro->set(ID_Libro, $isbn);
        $Libro->set(NOMBRE_LIBRO, $nombreLibro);
        $Libro->set(EDITORIAL, $editorial);
        $Libro->set(ESTANTE, $estante);
        $Libro->set(CATEGORIA, $categoria);
        $Libro->set(DESCRIPCION, $descripcion);
        $Libro->set(ANIO, $anio);
        $result = $Libro->insertar();
        $Libro->close();
        if ($result == 1) {
            echo '<script language="javascript">alert("El libro se guardó correctamente.");</script>';
            header("Location: http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
        } else {
            echo '<script language="javascript">alert("Hubo un error al guardar el libro.");</script>';
            header("http://localhost/ProyectoBiblioteca/formularioRegistrarLibro.php");
        }
        break;
    //Prestamo de libro
    case 2:
        $fecha = getdate();
        $dia = $fecha['mday'];
        $mes = $fecha['mon'];
        $anio = $fecha['year'];
        $hora = $fecha['hours'];
        $minutos = $fecha['minutes'];
        $idPrestamo = $hora . $minutos . $dia . $mes . $anio;

        $fechaPrestado = $anio . '-' . $mes . '-' . $dia;

        $dia2 = date('d', time() + 338400);
        $mes2 = date('F', time() + 338400);
        $anio2 = date('Y', time() + 338400);
        $fechaRetorno = $anio2 . '-' . $mes2 . '-' . $dia2;
        
        $entregado = 1;

        $copiaLibro = $_POST['isbn'];

        $usuario = $_POST['claveUsuario'];

        $encargado = $_POST['claveEncargado'];
//        echo 'Antes';
//        $Lib = new Libro();
//        echo 'Des';
//        $Lib->conectar();
//        $Lib->select_database();
        $T = new Tabla(TABLA_COPIA_LIBRO);
        $T->conectar();
        $T->select_database();
        $libroDisponible = "select count(*) as disp from copia_libro where idCopia_Libro='" . $copiaLibro . "' and disponible='disponible';";
        $res = mysqli_fetch_array($T->query($libroDisponible));
//        echo $res;
//        echo ' '.$res['disp'];
        $T->close();
        if ($res['disp'] == 0) {
            echo '<script language="javascript">alert("No hay copias disponibles del libro.");</script>';
        } else {
            $Prestamo = new Tabla(TABLA_PRESTAMO);
            $Prestamo->conectar();
            $Prestamo->select_database();
            $Prestamo->set(ID_PRESTAMO, $idPrestamo);
            $Prestamo->set(FECHA_PRESTAMO_INICIO, $fechaPrestado);
            $Prestamo->set(FECHA_PRESTAMO_RETORNO, $fechaRetorno);
            $Prestamo->set(PRESTAMO_ENTREGADO, $entregado);
            $Prestamo->set(PRESTAMO_COPIA_LIBRO, $copiaLibro);
            $Prestamo->set(PRESTAMO_USUARIO_ID, $usuario);
            $Prestamo->set(PRESTAMO_ENCARGADO, $encargado);
            $resultado = $Prestamo->insertar();
            $Prestamo->close();
            if ($resultado == 1) {
                echo '<script language="javascript">alert("El prestamo se guardó correctamente.");</script>';
                header("Location: http://localhost/ProyectoBiblioteca/formularioAltaPrestamo.php");
            } else {
                echo '<script language="javascript">alert("Hubo un error al guardar el prestamo.");</script>';
                header("Location: http://localhost/ProyectoBiblioteca/formularioAltaPrestamo.php");
            }
        }
        break;
}