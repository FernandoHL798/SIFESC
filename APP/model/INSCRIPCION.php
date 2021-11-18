<?php
include_once "CONEXION.php";
class INSCRIPCION extends CONEXION{
    private $id_inscripcion;
    private $id_usuarioalumno_fk;
    private $id_periodo_fk;
    private $fecha_inscripcion;
    private $hora_inscripcion;
    private $fecha_altas_bajas;
    private $hora_altas_bajas;

  
    /**
     * @return mixed
     */
    public function getIdInscripcion()
    {
        return $this->id_inscripcion;
    }
    /**
     * @param mixed $id_inscripcion
     */
    public function setIdInscripcion($id_inscripcion): void
    {
        $this->id_inscripcion = $id_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioAlumnoFk()
    {
        return $this->id_usuarioalumno_fk;
    }
    /**
     * @param mixed $id_usuarioalumno_fk
     */
    public function setIdUsuarioAlumnoFk($id_usuarioalumno_fk): void
    {
        $this->id_usuarioalumno_fk = $id_usuarioalumno_fk;
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

    /**
     * @return mixed
     */
    public function getFechaAltasBajas()
    {
        return $this->fecha_altas_bajas;
    }
    /**
     * @param mixed $fecha_altas_bajas
     */
    public function setFechaAltasBajas($fecha_altas_bajas): void
    {
        $this->fecha_altas_bajas = $fecha_altas_bajas;
    }
    
    /**
     * @return mixed
     */
    public function getHoraAltasBajas()
    {
        return $this->hora_altas_bajas;
    }
    /**
     * @param mixed $hora_altas_bajas
     */
    public function setHoraAltasBajas($hora_altas_bajas): void
    {
        $this->hora_altas_bajas = $hora_altas_bajas;
    }

    
    public function queryconsultaInscripcion(){
        $query="SELECT `id_inscripcion`, `id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inscripcion`, `hora_inscripcion`, `fecha_altas_bajas`, `hora_altas_bajas`, `updated_at`, `created_at` FROM `inscripcion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateInscripcion(){
        $query="UPDATE `inscripcion` SET `id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."', 
        `id_periodo_fk` = '".$this->getIdPeriodoFk()."', `fecha_inscripcion` = '".$this->getFechaInscripcion()."',
         `hora_inscripcion` = '".$this->getHoraInscripcion()."', `fecha_altas_bajas` = '".$this->getFechaAltasBajas()."'
         `hora_altas_bajas` = '".$this->getHoraAltasBajas()."', `updated_at` = current_timestamp()
         WHERE `inscripcion`.`id_inscripcion` = '".$this->getIdInscripcion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertInscripcion(){
        $query="INSERT into `inscripcion`(`id_inscripcion`,`id_usuarioalumno_fk`,`id_periodo_fk`,`fecha_inscripcion`,`hora_inscripcion`, `fecha_altas_bajas`, `hora_altas_bajas`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdInscripcion()."', '".$this->getIdUsuarioAlumnoFk()."', '".$this->getIdPeriodoFk()."',
         '".$this->getFechaInscripcion()."', '".$this->getHoraInscripcion()."', '".$this->getFechaAltasBajas()."',
          '".$this->getHoraAltasBajas()."',current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteInscripcion(){
        $query="DELETE FROM `inscripcion` WHERE `id_inscripcion`='".$this->getIdInscripcion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}