<?php
include_once "CONEXION.php";
class DOSIFICACION extends CONEXION{
    private $id_usuarioalumno_fk;
    private $id_periodo_fk;
    private $fecha_inscripcion;
    private $hora_inscripcion;
    private $fecha_altabaja;

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
    public function getFechaInscripcion()
    {
        return $this->fecha_inscripcion;
    }
    /**
     * @param mixed $fecha_inscripcion
     */
    public function setFechaInscripcion($fecha_inscripcion): void
    {
        $this->fecha_inscripcion = $fecha_inscripcion;
    }

     /**
     * @return mixed
     */
    public function getHoraInscripcion()
    {
        return $this->hora_inscripcion;
    }
    /**
     * @param mixed $hora_inscripcion
     */
    public function setHoraInscripcion($hora_inscripcion): void
    {
        $this->hora_inscripcion = $hora_inscripcion;
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

    
    public function queryconsultaDosificacion(){
        $query="SELECT `id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inscripcion`, `hora_inscripcion`, `fecha_altabaja`, `updated_at`, `created_at` FROM `dosificacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateDosificacion(){
        $query="UPDATE `dosificacion` SET `fecha_inscripcion` = '".$this->getFechaInscripcion()."', `hora_inscripcion` = '".$this->getHoraInscripcion()."', 
        `fecha_altabaja` = '".$this->getFechaAltaBaja()."', `updated_at` = current_timestamp()
         WHERE `dosificacion`.`id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."' AND `dosificacion`.`id_periodo_fk` = '".$this->getIdPeriodoFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertDosificacion(){
        $query="INSERT into `dosificacion`(`id_usuarioalumno_fk`,`id_periodo_fk`,`fecha_inscripcion`,`hora_inscripcion`,`fecha_altabaja`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdUsuarioAlumnoFk()."', '".$this->getIdPeriodoFk()."', '".$this->getFechaInscripcion()."', '".$this->getHoraInscripcion()."', 
        '".$this->getFechaAltaBaja()."', current_timestamp(), current_timestamp())";
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
