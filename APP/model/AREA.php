<?php
include_once "CONEXION.php";
class AREA extends CONEXION{
    private $id_area;
    private $nombre;
  
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

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }
    
    public function queryconsultaArea(){
        $query="SELECT `id_area`, `nombre` FROM `area`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateArea(){
        $query="UPDATE `area` SET `nombre` = '".$this->getNombre()."' WHERE `area`.`id_area` = '".$this->getIdArea()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertArea(){
        $query="INSERT into `area`(`id_area`, `nombre`) 
        VALUES ('".$this->getIdArea()."', '".$this->getNombre()."')";
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