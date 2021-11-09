<?php
include_once "CONEXION.php";
class PLANTELCARRERA extends CONEXION{
    private $id_carrera_fk;
    private $id_plantel_fk;
    private $aciertos_minimos;
    private $promedio_minimo;
    private $cupo;
    private $updated_at;
    private $created_at;

  
    /**
     * @return mixed
     */
    public function getIdCarreraFk()
    {
        return $this->id_carrera_fk;
    }
    /**
     * @param mixed $id_carrera_fk
     */
    public function setIdCarreraFk($id_carrera_fk): void
    {
        $this->id_carrera_fk = $id_carrera_fk;
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
    public function getAciertosMinimos()
    {
        return $this->aciertos_minimos;
    }
    /**
     * @param mixed $aciertos_minimos
     */
    public function setAciertosMinimos($aciertos_minimos): void
    {
        $this->aciertos_minimos = $aciertos_minimos;
    }

     /**
     * @return mixed
     */
    public function getPromedioMinimo()
    {
        return $this->promedio_minimo;
    }
    /**
     * @param mixed $promedio_minimo
     */
    public function setPromedioMinimo($promedio_minimo): void
    {
        $this->promedio_minimo = $promedio_minimo;
    }

    /**
     * @return mixed
     */
    public function getCupo()
    {
        return $this->cupo;
    }
    /**
     * @param mixed $cupo
     */
    public function setCupo($cupo): void
    {
        $this->cupo = $cupo;
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

    
    public function queryconsultaPlantelCarrera(){
        $query="SELECT `id_plantel_fk`, `id_carrera_fk`, `aciertos_minimos`, `promedio_minimo`, `cupo`, `updated_at`, `created_at` FROM `plantel_carrera`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePlantelCarrera(){
        $query="UPDATE `plantel_carrera` SET `aciertos_minimos` = '".$this->getAciertosMinimos()."', `promedio_minimo` = '".$this->getPromedioMinimo()."', `cupo` = '".$this->getCupo()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `plantel_carrera`.`id_carrera_fk` = '".$this->getIdCarreraFK()."' AND `plantel_carrera`.`id_plantel_fk` = '".$this->getIdPlantelFK()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPlantelCarrera(){
        $query="INSERT into `plantel_carrera`(`id_carrera_fk`,`id_planTEL_FK`,`aciertos_minimos`,`promedio_minimo`,`cupo`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdCarreraFk()."', '".$this->getIdPlantelFK()."', '".$this->getAciertosMinimos()."', '".$this->getPromedioMinimo()."', '".$this->getCupo()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeletePlantelCarrera(){
        $query="DELETE FROM `plantel_carrera` WHERE `id_carrera_fk`='".$this->getIdCarreraFk()."' AND `id_plantel_fk`='".$this->getIdPlantelFK()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}