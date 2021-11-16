<?php
include_once "CONEXION.php";
class PLANTEL extends CONEXION{
    private $id_plantel;
    private $id_facultad_fk;
    private $nombre;

  
    /**
     * @return mixed
     */
    public function getIdPlantel()
    {
        return $this->id_plantel;
    }
    /**
     * @param mixed $id_Plantel
     */
    public function setIdPlantel($id_plantel): void
    {
        $this->id_plantel = $id_plantel;
    }

      /**
     * @return mixed
     */
    public function getIdFacultadFk()
    {
        return $this->id_facultad_fk;
    }
    /**
     * @param mixed $id_facultad_fk
     */
    public function setIdFacultadFk($id_facultad_fk): void
    {
        $this->id_facultad_fk = $id_facultad_fk;
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

    
    public function queryconsultaPlantel(){
        $query="SELECT `id_plantel`, `id_facultad_fk`, `nombre`, `updated_at`, `created_at` FROM `plantel`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePlantel(){
        $query="UPDATE `plantel` SET `nombre` = '".$this->getNombre()."', `updated_at` = current_timestamp()
         WHERE `plantel`.`id_plantel` = '".$this->getIdPlantel()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPlantel(){
        $query="INSERT into `plantel`(`id_plantel`,`id_facultad_fk`,`nombre`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdPlantel()."', '".$this->getIdFacultadFk()."', '".$this->getNombre()."',
        current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeletePlantel(){
        $query="DELETE FROM `plantel` WHERE `id_plantel`='".$this->getIdPlantel()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
