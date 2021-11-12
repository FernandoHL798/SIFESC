<?php
include_once "CONEXION.php";
class FACULTAD extends CONEXION{
    private $id_facultad;
    private $nombre_facultad;

    /**
     * @return mixed
     */
    public function getIdFacultad()
    {
        return $this->id_facultad;
    }
    /**
     * @param mixed $id_facultad
     */
    public function setIdFacultad($id_facultad): void
    {
        $this->id_facultad = $id_facultad;
    }

     /**
     * @return mixed
     */
    public function getNombreFacultad()
    {
        return $this->nombre_facultad;
    }
    /**
     * @param mixed $nombre_facultad
     */
    public function setNombreFacultad($nombre_facultad): void
    {
        $this->nombre_facultad = $nombre_facultad;
    }

    
    public function queryconsultaFacultad(){
        $query="SELECT `id_facultad`, `nombre_facultad`, `updated_at`, `created_at` FROM `facultad`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateFacultad(){
        $query="UPDATE `facultad` SET `nombre_facultad` = '".$this->getNombreFacultad()."', 
        `updated_at` = current_timestamp() WHERE `facultad`.`id_facultad` = '".$this->getIdFacultad()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertFacultad(){
        $query="INSERT into `facultad`(`id_facultad`,`nombre_facultad`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdFacultad()."', '".$this->getNombreFacultad()."',
        current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteFacultad(){
        $query="DELETE FROM `facultad` WHERE `id_facultad`='".$this->getIdFacultad()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
