<?php
include_once "CONEXION.php";
class FACULTAD extends CONEXION{
    private $id_usuarioalumno_fk;
    private $id_periodo_fk;
    private $fecha_inc;
    private $fecha_altabaja;
    private $updated_at;
    private $created_at;

    /**
     * @return mixed
     */
    public function getIdUsuarioAlumnoFk()
    {
        return $this->id_usuarioalumno_fk;
    }
    /**
     * @param mixed $id_usuarioalumno_fk;
     */
    public function setIdUsuarioAlumnoFk;($id_usuarioalumno_fk;): void
    {
        $this->id_usuarioalumno_fk; = $id_usuarioalumno_fk;;
    }

    /**
     * @return mixed
     */
    public function getIdPeriodoFk()
    {
        return $this->id_periodo_fk;
    }
    /**
     * @param mixed $id_periodo_fk
     */
    public function setIdPeriodoFk($id_periodo_fk): void
    {
        $this->id_periodo_fk = $id_periodo_fk;
    }

     /**
     * @return mixed
     */
    public function getFechaInc()
    {
        return $this->fecha_inc;
    }
    /**
     * @param mixed $fecha_inc
     */
    public function setFechaInc($fecha_inc): void
    {
        $this->fecha_inc = $fecha_inc;
    }

    /**
     * @return mixed
     */
    public function getFechaAltaBaja()
    {
        return $this->fecha_altabaja;
    }
    /**
     * @param mixed $fecha_altabaja
     */
    public function setFechaAltaBaja($fecha_altabaja): void
    {
        $this->fecha_altabaja = $fecha_altabaja;
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

    
    public function queryconsultaDosificacion(){
        $query="SELECT `id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inc`, `fecha_altabaja`, `updated_at`, `created_at` FROM `dosificacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateDosificacion(){
        $query="UPDATE `dosificacion` SET `fecha_inc` = '".$this->getFechaInc()."', `fecha_altabaja` = '".$this->getFechaAltaBaja()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `dosificacion`.`id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."' AND `dosificacion`.`id_periodo_fk` = '".$this->getIdPeriodoFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertDosificacion(){
        $query="INSERT into `dosificacion`(`id_usuarioalumno_fk`,`id_periodo_fk`,`fecha_inc`,`fecha_altabaja`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdUsuarioAlumnoFk()."', '".$this->getIdPeriodoFk()."', '".$this->getFechaInc()."', '".$this->getFechaAltaBaja()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteDosificacion(){
        $query="DELETE FROM `dosificacion` WHERE `id_usuarioalumno_fk`='".$this->getIdUsuarioAlumnoFk()."' AND `id_perido_fk`='".$this->getIdPeriodoFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
