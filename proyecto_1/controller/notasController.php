<?php
namespace controller;
include "../model/conexDB.php";
include "../model/notas.php";
use model\ConexDB;
use model\Notas;

class NotasController {
    private $notas;

   

    public function getAllNotas() {
        return $this->notas->getAll();
    }

    public function addNota($nombre, $descripcion, $nota) {
    }  
}