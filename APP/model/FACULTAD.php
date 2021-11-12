<?php
include_once "CONEXION.php";
class FACULTAD extends CONEXION{
    private $id_facultad;
    private $nombre_facultad;
    private $updated_at;
    private $created_at;

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

     /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    
    public function queryconsultaFacultad(){
        $query="SELECT `id_facultad`, `nombre_facultad`, `updated_at`, `created_at` FROM `facultad`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateFacultad(){
        $query="UPDATE `facultad` SET `nombre_facultad` = '".$this->getNombreFacultad()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `facultad`.`id_facultad` = '".$this->getIdFacultad()."'";
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
