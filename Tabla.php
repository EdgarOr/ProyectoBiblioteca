<?php

require './DataBase.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tabla
 *
 * @author Adrián
 */
class Tabla extends DataBase {

    private $nombre;
    protected $campos;
    protected $valores;

    public function __construct($nombre) {
        parent::__construct();
        $this->nombre = $nombre;
        $this->campos = array();
        $this->valores = array();
    }

    public function set($campo, $valor) {
        $this->campos[] = $campo;
        $this->valores[] = $valor;
    }

    public function getCampos() {
        return $this->campos;
    }

    public function getValores() {
        return $this->valores;
    }

    public function nombre_Table() {
        return $this->nombre;
    }

    public function insertar() {
        $query = "insert into " . $this->nombre_Table() . "(";
        $campos = $this->getCampos();
        for ($index1 = 0; $index1 < count($campos); $index1++) {
            if ($index1 == count($campos) - 1) {
                $query.=$campos[$index1];
                break;
            }
            $query.=$campos[$index1] . ", ";
        }

        $query.=") values('";
        $valores = $this->getValores();

        for ($index2 = 0; $index2 < count($valores); $index2++) {
            if ($index2 == count($valores) - 1) {
                $query.=$valores[$index2];
                break;
            }
            $query.=$valores[$index2] . "', '";
        }

        $query.= "');";
        return $this->query($query);
    }

    public function delete($where) {
        $delete = "delete " . $this->nombre_Table() . ".*" .
                " from " . $this->nombre_Table() .
                " where " . $where . ";";
        return $this->query($delete);
    }

    public function query($query) {
        $resultados = mysqli_query($this->getMysqli(), utf8_decode($query))or die(mysqli_error($this->getMysqli()));
        return $resultados;
    }

    public function update($set, $where) {
        $update = "update " . $this->nombre_Table() .
                " set " . $set .
                " where " . $where;
        return $this->query($update);
    }

}
