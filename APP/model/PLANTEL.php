<?php
include_once "CONEXION.php";
class PLANTEL extends CONEXION{
    private $id_plantel;
    private $id_facultad_fk;
    private $nombre;
    private $updated_at;
    private $created_at;

  
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

    
    public function queryconsultaPlantel(){
        $query="SELECT `id_plantel`, `id_facultad_fk`, `nombre`, `updated_at`, `created_at` FROM `plantel`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePlantel(){
        $query="UPDATE `plantel` SET `id_facultad_fk` = '".$this->getIdFacultadFk()."', `nombre` = '".$this->getNombre()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `plantel`.`id_plantel` = '".$this->getIdPlantel()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPlantel(){
        $query="INSERT into `plantel`(`id_plantel`,`id_facultad_fk`,`nombre`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdPlantel()."', '".$this->getIdFacultadFk()."', '".$this->getNombre()."','".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
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
