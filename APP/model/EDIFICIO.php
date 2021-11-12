<?php
include_once "CONEXION.php";
class EDIFICIO extends CONEXION{
    private $id_edificio;
    private $id_plantel_fk;
    private $clave;
    private $pisos;

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
    
    public function queryconsultaEdificio(){
        $query="SELECT `id_edificio`, `id_plantel_fk`, `clave`, `pisos`, `updated_at`, `created_at` FROM `edificio`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEdificio(){
        $query="UPDATE `edificio` SET `id_plantel_fk` = '".$this->getIdPlantelFK()."', `clave` = '".$this->getClave()."',
         `pisos` = '".$this->getPisos()."', `updated_at` = current_timestamp() WHERE `edificio`.`id_edificio` = '".$this->getIdEdificio()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertEdificio(){
        $query="INSERT into `edificio`(`id_edificio`,`id_plantel_fk`,`clave`,`pisos`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdEdificio()."', '".$this->getIdPlantelFk()."', '".$this->getClave()."',
         '".$this->getPisos()."', current_timestamp(),current_timestamp())";
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
