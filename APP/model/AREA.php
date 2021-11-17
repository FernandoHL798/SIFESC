<?php
include_once "CONEXION.php";
class AREA extends CONEXION{
    private $id_area;
  
    /**
     * @return mixed
     */
    public function getIdArea()
    {
        return $this->id_area;
    }
    /**
     * @param mixed $id_area
     */
    public function setIdArea($id_area): void
    {
        $this->id_area = $id_area;
    }
    
    public function queryconsultaArea(){
        $query="SELECT `id_area` FROM `area`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertArea(){
        $query="INSERT into `area`(`id_area`) 
        VALUES ('".$this->getIdArea()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteArea(){
        $query="DELETE FROM `area` WHERE `id_area`='".$this->getIdArea()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}