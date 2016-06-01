<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('USER', "root");
define('HOST', "localhost");
define('PASSWORD', "java43");
define('USE_DATABASE', "nabudb");

// Tabla de la categoría 
define('TABLA_CATEGORIAS', "categoria");
define('ID_CATEGORIA', "idCategoria");
define('NOMBRE_CATEGORIA', "nombreCategoria");

// Tabla de estantes 
define('TABLA_ESTANTES', "estante");
define('ID_ESTANTE', "idEstante");
define('NOMBRE_ESTANTE', "nombre");

// Tabla de libros
define('TABLA_LIBROS', "libro");
define('ID_Libro', "isbn");
define('NOMBRE_LIBRO', "nombreLibro");
define('AUTOR_LIBRO', "autor_libro");
define('EDITORIAL', "editorial");
define('ESTANTE', "estante");
define('CATEGORIA', "categoría");
define('DESCRIPCION', "descripcion");
define('ANIO', "año");

// Tabla de usuarios
define('TABLA_USUARIOS', "usuario");
define('ID_USUARIO', "idUsuario");
define('CLAVE_USUARIO', "claveUsuario");
define('NOMBRE_USUARIO', "nombreUsuario");
define('APELLIDO_P_USUARIO', "apellidoPU");
define('APELLIDO_M_USUARIO', "apellidoMU");
define('EMAIL_USUARIO', "emailUsuario");
define('CONTRASENA_USUARIO', "contrasenaUsuario");
define('DIRECCION_USUARIO', "direccionusuario");
define('TEL1_USUARIO', "tel1Usuario");
define('TEL2_USUARIO', "tel2Usuario");

// Tabla de copia del libro
define('TABLA_COPIA_LIBRO', "copia_libro");
define('ID_COPIA_LIBRO', "idInscripciones");
define('DISPONIBLE_LIBRO', "Fecha_Insc");
define('COPIA_LIBRO_LIBRO_ID_LIBRO', "N_Control");

// tabla de prestamo
define('TABLA_PRESTAMO', "prestamo");
define('ID_PRESTAMO', "idPrestamo");
define('FECHA_PRESTAMO_INICIO', "fechaPrestado");
define('FECHA_PRESTAMO_RETORNO', "fechaRetorno");
define('PRESTAMO_ENTREGADO', "entregado");
define('PRESTAMO_COPIA_LIBRO', "Copia_Libro_idCopia_Libro");
define('PRESTAMO_USUARIO_ID', "Usuario_idUsuario");
define('PRESTAMO_ENCARGADO', "Encargado_idEncargado");

// tabla de sugerencia
define('TABLA_SUGERENCIA', "sugerencia");
define('ID_SUGERENCIA', "idSugerencia");
define('NOMBRE_SUGERENCIA', "nombreLibro");
define('AUTOR_LIBRO_SUGERENCIA', "autorLibro");
define('OBSERVACIONES_SUGERENCIA', "observaciones");
define('SUGERENCIA_USUARIO', "Usuario_idUsuario");

//tabla de encargado
define('TABLA_ENCARGADO', "encargado");
define('ID_ENCARGADO', "idEncargado");
define('CLAVE_ENCARGADO', "claveEncargado");
define('NOMBRE_ENCARGADO', "nombreEncargado");
define('APELLIDO_P_ENCARGADO', "apellidoPE");
define('APELLIDO_M_ENCARGADO', "apellidoME");
define('TELEFONO_ENCARGADO', "telefonoEncargado");
define('CELULAR_ENCARGADO', "celularEncargado");
define('DIRECCION_ENCARGADO', "direccionEncargado");
define('EMAIL_ENCARGADO', "emailEncargado");
define('CONTRASENA_ENCARGADO', "contrasenaEncargado");
define('HORA_ENTRADA_ENCARGADO', "horaEntrada");
define('HORA_SALIDA_ENCARGADO', "horaSalida");
define('FECHA_INGRESO_ENCARGADO', "fechaIngreso");

define('OPCION', "opcion");
define('URLHOST', "http://localhost/ProyectoBiblioteca/");
