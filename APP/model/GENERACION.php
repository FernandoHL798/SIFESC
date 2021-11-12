<?php
include_once "CONEXION.php";
class GENERACION extends CONEXION{
    private $id_generacion;
    private $id_plan_fk;
    private $anio;

  
    /**
     * @return mixed
     */
    public function getIdGeneracion()
    {
        return $this->id_generacion;
    }
    /**
     * @param mixed $id_generacion
     */
    public function setIdGeneracion($id_generacion): void
    {
        $this->id_generacion = $id_generacion;
    }

    /**
     * @return mixed
     */
    public function getIdPlanFk()
    {
        return $this->id_plan_fk;
    }
    /**
     * @param mixed $id_plan_fk
     */
    public function setIdPlanFk($id_plan_fk): void
    {
        $this->id_plan_fk = $id_plan_fk;
    }

      /**
     * @return mixed
     */
    public function getAnio()
    {
        return $this->anio;
    }
    /**
     * @param mixed $anio
     */
    public function setAnio($anio): void
    {
        $this->anio = $anio;
    }
    
    public function queryconsultaGeneracion(){
        $query="SELECT `id_generacion`, `id_plan_fk`, `anio`, `updated_at`, `created_at` FROM `generacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateGeneracion(){
        $query="UPDATE `generacion` SET `id_plan_fk` = '".$this->getIdPlanFk()."', `anio` = '".$this->getAnio()."',
         `updated_at` = current_timestamp() WHERE `generacion`.`id_generacion` = '".$this->getIdGeneracion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertGeneracion(){
        $query="INSERT into `generacion`(`id_generacion`,`id_plan_fk`,`anio`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdGeneracion()."', '".$this->getIdPlanFk()."', '".$this->getAnio()."', current_timestamp(),
        current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteGeneracion(){
        $query="DELETE FROM `generacion` WHERE `id_generacion`='".$this->getIdGeneracion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}