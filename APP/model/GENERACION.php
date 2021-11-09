<?php
include_once "CONEXION.php";
class GENERACION extends CONEXION{
    private $id_generacion;
    private $id_plan_fk;
    private $anio;
    private $updated_at;
    private $created_at;

  
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

    
    public function queryconsultaGeneracion(){
        $query="SELECT `id_generacion`, `id_plan_fk`, `anio`, `updated_at`, `created_at` FROM `generacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateGeneracion(){
        $query="UPDATE `generacion` SET `id_plan_fk` = '".$this->getIdPlanFk()."', `anio` = '".$this->getAnio()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `generacion`.`id_generacion` = '".$this->getIdGeneracion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertGeneracion(){
        $query="INSERT into `generacion`(`id_generacion`,`id_plan_fk`,`anio`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdGeneracion()."', '".$this->getIdPlanFk()."', '".$this->getAnio()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
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