<?php
include_once "CONEXION.php";
class PLANDEESTUDIOS extends CONEXION{
    private $id_plan;
    private $id_carrera_fk;
    private $anio_plan;
    private $creditos_obligatorios;
    private $creditos_optativos;
    private $creditos_totales;
    private $semestres;

  
    /**
     * @return mixed
     */
    public function getIdPlan()
    {
        return $this->id_plan;
    }
    /**
     * @param mixed $id_plan
     */
    public function setIdPlan($id_plan): void
    {
        $this->id_plan = $id_plan;
    }

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
    public function getAnioPlan()
    {
        return $this->anio_plan;
    }
    /**
     * @param mixed $anio_plan
     */
    public function setAnioPlan($anio_plan): void
    {
        $this->anio_plan = $anio_plan;
    }

     /**
     * @return mixed
     */
    public function getCreditosObligatorios()
    {
        return $this->creditos_obligatorios;
    }
    /**
     * @param mixed $creditos_obligatorios
     */
    public function setCreditosObligatorios($creditos_obligatorios): void
    {
        $this->creditos_obligatorios = $creditos_obligatorios;
    }

    /**
     * @return mixed
     */
    public function getCreditosOptativos()
    {
        return $this->creditos_optativos;
    }
    /**
     * @param mixed $creditos_optativos
     */
    public function setCreditosOptativos($creditos_optativos): void
    {
        $this->creditos_optativos = $creditos_optativos;
    }

    /**
     * @return mixed
     */
    public function getCreditosTotales()
    {
        return $this->creditos_totales;
    }
    /**
     * @param mixed $creditos_totales
     */
    public function setCreditosTotales($creditos_totales): void
    {
        $this->creditos_totales = $creditos_totales;
    }

    /**
     * @return mixed
     */
    public function getSemestres()
    {
        return $this->semestres;
    }
    /**
     * @param mixed $semestres
     */
    public function setSemestres($semestres): void
    {
        $this->semestres = $semestres;
    }
    
    public function queryconsultaPlan(){
        $query="SELECT `id_plan`, `id_carrera_fk`, `anio_plan`, `creditos_obligatorios`, `creditos_optativos`, `creditos_totales`, `semestres`,`updated_at`, `created_at` FROM `plandeestudios`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePlan(){
        $query="UPDATE `plandeestudios` SET `id_carrera_fk` = '".$this->getIdCarreraFk()."',
         `anio_plan` = '".$this->getAnioPlan()."', `creditos_obligatorios` = '".$this->getCreditosObligatorios()."',
         `creditos_optativos` = '".$this->getCreditosOptativos()."', 
         `creditos_totales` = '".$this->getCreditosTotales()."', `semestres` = '".$this->getSemestres()."', 
         `updated_at` = current_timestamp() WHERE `plandeestudios`.`id_plan` = '".$this->getIdPlan()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPlan(){
        $query="INSERT into `plandeestudios`(`id_plan`,`id_carrera_fk`,`anio_plan`,`creditos_obligatorios`,`creditos_optativos`,`creditos_totales`,`semestres`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdPlan()."', '".$this->getIdCarreraFk()."', '".$this->getAnioPlan()."', 
        '".$this->getCreditosObligatorios()."', '".$this->getCreditosOptativos()."', 
        '".$this->getCreditosTotales()."', '".$this->getSemestres()."', current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeletePlan(){
        $query="DELETE FROM `plandeestudios` WHERE `id_plan`='".$this->getIdPlan()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}