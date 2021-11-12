<?php
include_once "CONEXION.php";
class CARRERA extends CONEXION{
    private $id_carrera;
    private $clave;
    private $nombre;

  
    /**
     * @return mixed
     */
    public function getIdCarrera()
    {
        return $this->id_carrera;
    }
    /**
     * @param mixed $id_carrera
     */
    public function setIdCarrera($id_carrera): void
    {
        $this->id_carrera = $id_carrera;
    }

      /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }
    /**
     * @param mixed $clave
     */
    public function setClave($clave): void
    {
        $this->clave = $clave;
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

    
    public function queryconsultaCarrera(){
        $query="SELECT `id_carrera`, `clave`, `nombre`, `updated_at`, `created_at` FROM `carrera`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateCarrera(){
        $query="UPDATE `carrera` SET `clave` = '".$this->getClave()."', `nombre` = '".$this->getNombre()."',
         `updated_at` = current_timestamp() WHERE `carrera`.`id_carrera` = '".$this->getIdCarrera()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertCarrera(){
        $query="INSERT into `carrera`(`id_carrera`,`clave`,`nombre`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdCarrera()."', '".$this->getClave()."', '".$this->getNombre()."',
        current_timestamp(), current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteCarrera(){
        $query="DELETE FROM `carrera` WHERE `id_carrera`='".$this->getIdCarrera()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
