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
require './Usuario.php';

$opcion = $_POST['accion'];
switch ($opcion) {
    //Login
    case 1:
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $Usuario = new Usuario();
        $Usuario->conectar();
        $Usuario->select_database();
        $resultado = mysqli_fetch_array($Usuario->login($user, $pass));
        if ($resultado['login'] == "1") {
            header("Location: http://localhost/ProyectoBiblioteca/index.php");
            echo '<script language="javascript">alert("Sesión iniciada.");</script>';
        } else {
            echo '<script language="javascript">alert("Error al iniciar sesión.");</script>';
            header("http://localhost/ProyectoBiblioteca/login.php");
        }
        $Usuario->close();
        break;
    //Inserción de usuario
    case 2:
        $idUsuario = $_POST[CLAVE_USUARIO];
        $claveUsuario = $_POST[CLAVE_USUARIO];
        $nombre = $_POST[NOMBRE_USUARIO];
        $apellidoP = $_POST[APELLIDO_P_USUARIO];
        $apellidoM = $_POST[APELLIDO_M_USUARIO];
        $emailUsuario = $_POST[EMAIL_USUARIO];
        $contra = 'java';
        $direccion = 'unkwon';
        $tel1 = $_POST[TEL1_USUARIO];
        $tel2 = $_POST[TEL2_USUARIO];
        $Usuario = new Tabla(TABLA_USUARIOS);
        $Usuario->conectar();
        $Usuario->select_database();
        $Usuario->set(ID_USUARIO, $idUsuario);
        $Usuario->set(CLAVE_USUARIO, $claveUsuario);
        $Usuario->set(NOMBRE_USUARIO, $nombre);
        $Usuario->set(APELLIDO_P_USUARIO, $apellidoP);
        $Usuario->set(APELLIDO_M_USUARIO, $apellidoM);
        $Usuario->set(EMAIL_USUARIO, $emailUsuario);
        $Usuario->set(CONTRASENA_USUARIO, $contra);
        $Usuario->set(DIRECCION_USUARIO, $direccion);
        $Usuario->set(TEL1_USUARIO, $tel1);
        $Usuario->set(TEL2_USUARIO, $tel2);
        $result=$Usuario->insertar();
        $Usuario->close();
        if($result=="1") {
            header("Location: http://localhost/ProyectoBiblioteca/index.php");
            echo '<script language="javascript">alert("El usuario se guardó correctamente.");</script>';
        } else {
            echo '<script language="javascript">alert("Hubo un error al guardar elusuario.");</script>';
            header("Location: http://localhost/ProyectoBiblioteca/formularioAltaUsuario.php");
        }
        break;
}