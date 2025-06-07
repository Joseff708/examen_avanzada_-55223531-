<?php
namespace model;

use mysqli;

class ConexDB{
    protected $server = 'localhost';
    protected $user ='root';
    protected $pswd = "";
    protected $nameDB="notas_db";
    protected $conexion;
    
    public function __construct(){
        $this->conexion = new mysqli($this->server, $this->user, $this->pswd, $this->nameDB);
        
    }

    public function consulta($sql){
        return $this->conexion->query($sql);
    }

    public function close(){
        $this->conexion->close();
    }
}



?>