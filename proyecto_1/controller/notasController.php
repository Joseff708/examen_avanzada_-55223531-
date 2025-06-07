<?php
use model\Notas;
namespace controller;
class NotasController {
    private $notas;

   

    public function getAllNotas() {
        return $this->notas->getAll();
    }

    public function addNota($nombre, $descripcion, $nota) {
    }  
}