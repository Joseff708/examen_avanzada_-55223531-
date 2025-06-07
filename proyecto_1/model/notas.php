<?php

namespace model;
use model\conexDB;
class Notas {
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $nota;

    function getAll(){
        $conexDB = new ConexDB();
        $sql='SELECT * FROM `notas`';
        $notas =[];
        $result = $conexDB->consulta($sql);
    
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $nota = new Notas();
            $nota->id = $row['id'];
            $nota->nombre = $row['nombre'];
            $nota->descripcion = $row['descripcion'];
            $nota->nota = $row['nota'];     
            $notas[] = $nota;

        }
    }
        $conexDB->close();
    
        
    return $notas;
    }
 }

