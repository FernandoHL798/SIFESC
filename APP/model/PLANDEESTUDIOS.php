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
    private $maximo_creditos;
    private $minimo_creditos;
    private $maximo_semestres;
    private $minimo_materias;
    private $maximo_materias;


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
    /**
     * @return mixed
     */
    public function getMaximoCreditos()
    {
        return $this-> $maximo_creditos;
    }
    /**
     * @param mixed $maximo_creditos
     */
    public function setMaximoCreditos($maximo_creditos):void
    {
        $this->maximo_creditos = $maximo_creditos;
    }
    /**
     * @return mixed
     */
    public function getMinimoCreditos()
    {
        return $this->$minimo_creditos;
    }
    /**
     * @param mixed $minimo_creditos
     */
    public function setMinimoCreditos($minimo_creditos): void
    {
        $this->$minimo_creditos = $minimo_creditos;
    }
    /**
     * @return mixed
     */
    public function getMaximoSemestres()
    {
        return $this->$maximo_semestres;
    }
    /**
     * @param mixed $maximo_semestres
     */
    public function setMaximoSemestres($maximo_semestres): void
    {
        $this->$maximo_semestres = $maximo_semestres;
    }
    /**
     * @return mixed
     */
    public function getMinimoMaterias()
    {
        return $this->$minimo_materias;
    }
    /**
     * @param mixed $minimo_materias
     */
    public function setMinimoMaterias($minimo_materias): void
    {
        $this->$minimo_materias = $minimo_materias;
    }
    /**
     * @return mixed
     */
    public function getMaximoMaterias()
    {
        return $this->$maximo_materias;
    }
    /**
     * @param mixed $maximo_materias
     */
    public function setMaximoMaterias($maximo_materias): void
    {
        $this->$maximo_materias = $maximo_materias;
    }

    public function queryconsultaPlan(){
        $query="SELECT `id_plan`, `id_carrera_fk`, `anio_plan`, `nombre_plan`, `creditos_obligatorios`, `creditos_optativos`, `creditos_totales`,
        `semestres`, `maximo_creditos`, `minimo_creditos`, `maximo_semestres`, `minimo_materias`,
        `maximo_materias`,`updated_at`, `created_at` FROM `plandeestudios`";
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
         `maximo_creditos`='".$this->getMaximoCreditos()."', `minimo_creditos`='".$this->getMinimoCreditos()."',
         `maximo_semestres`='".$this->getMaximoSemestres()."',`minimo_materias`='".$this->getMinimoMaterias()."',
         `maximo_materias`='".$this->getMaximoMaterias()."',
         `updated_at` = current_timestamp() WHERE `plandeestudios`.`id_plan` = '".$this->getIdPlan()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPlan(){
        $query="INSERT into `plandeestudios`(`id_plan`,`id_carrera_fk`,`anio_plan`,`creditos_obligatorios`,`creditos_optativos`,
        `creditos_totales`,`semestres`,`maximo_creditos`, `minimo_creditos`, `maximo_semestres`, `minimo_materias`,
        `maximo_materias``updated_at`,`created_at`)
        VALUES ('".$this->getIdPlan()."', '".$this->getIdCarreraFk()."', '".$this->getAnioPlan()."',
        '".$this->getCreditosObligatorios()."', '".$this->getCreditosOptativos()."',
        '".$this->getCreditosTotales()."', '".$this->getSemestres()."','".$this->getMaximoCreditos()."','".$this->getMinimoCreditos()."',
        '".$this->getMaximoSemestres()."','".$this->getMinimoMaterias()."','".$this->getMaximoMaterias()."', current_timestamp(),current_timestamp())";
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
