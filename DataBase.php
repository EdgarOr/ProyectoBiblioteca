<?php

require './Nombres.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataBase
 *
 * @author Adrián
 */
class DataBase {

    private $user;
    private $host;
    private $password;
    private $database;
    private $mysqli;

    public function __construct() {
        $this->user = USER;
        $this->host = HOST;
        $this->database = USE_DATABASE;
        $this->password = PASSWORD;
    }

    public function conectar() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->password);
        if ($this->mysqli->connect_error) {
            return die("Falló la conexión: " . $conn->connect_error);
        } else {
            return "Éxito.";
        }
    }

    public function select_database() {
        mysqli_select_db($this->mysqli, $this->database)or die("No se encontro la base de datos.");
    }

    public function close() {
        mysqli_close($this->mysqli)or die("No se pudo cerrar la conexión a la base de datos.");
    }

    function getMysqli() {
        return $this->mysqli;
    }

    function setMysqli($conexion) {
        $this->mysqli = $conexion;
    }

}
