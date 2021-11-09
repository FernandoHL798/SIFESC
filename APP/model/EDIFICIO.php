<?php
include_once "CONEXION.php";
class EDIFICIO extends CONEXION{
    private $id_edificio;
    private $id_plantel_fk;
    private $clave;
    private $pisos;
    private $updated_at;
    private $created_at;

    /**
     * @return mixed
     */
    public function getIdEdificio()
    {
        return $this->id_edificio;
    }
    /**
     * @param mixed $id_edificio
     */
    public function setIdEdificio($id_edificio): void
    {
        $this->id_edificio = $id_edificio;
    }

    /**
     * @return mixed
     */
    public function getIdPlantelFk()
    {
        return $this->id_plantel_fk;
    }
    /**
     * @param mixed $id_plantel_fk
     */
    public function setIdPlantelFk($id_plantel_fk): void
    {
        $this->id_plantel_fk = $id_plantel_fk;
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
    public function getPisos()
    {
        return $this->pisos;
    }
    /**
     * @param mixed $pisos
     */
    public function setPisos($pisos): void
    {
        $this->pisos = $pisos;
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

    
    public function queryconsultaEdificio(){
        $query="SELECT `id_edificio`, `id_plantel_fk`, `clave`, `pisos`, `updated_at`, `created_at` FROM `edificio`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEdificio(){
        $query="UPDATE `edificio` SET `id_plantel_fk` = '".$this->getIdPlantelFK()."', `clave` = '".$this->getClave()."', `pisos` = '".$this->getPisos()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `edificio`.`id_edificio` = '".$this->getIdEdificio()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertEdificio(){
        $query="INSERT into `edificio`(`id_edificio`,`id_plantel_fk`,`clave`,`pisos`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdEdificio()."', '".$this->getIdPlantelFk()."', '".$this->getClave()."', '".$this->getPisos()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteEdificio(){
        $query="DELETE FROM `edificio` WHERE `id_edificio`='".$this->getIdEdificio()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
