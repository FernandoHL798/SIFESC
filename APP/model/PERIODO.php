<?php
include_once "CONEXION.php";
class PERIODO extends CONEXION{
    private $id_periodo;
    private $id_asignacion_fk;
    private $fecha_inscripcion;
    private $fecha_altas_bajas;

  
    /**
     * @return mixed
     */
    public function getIdPeriodo()
    {
        return $this->id_periodo;
    }
    /**
     * @param mixed $id_periodo
     */
    public function setIdPeriodo($id_periodo): void
    {
        $this->id_periodo = $id_periodo;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacionFk()
    {
        return $this->id_asignacion_fk;
    }
    /**
     * @param mixed $id_asignacion_fk
     */
    public function setIdAsignacionFk($id_asignacion_fk): void
    {
        $this->id_asignacion_fk = $id_asignacion_fk;
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
    
    public function queryconsultaPeriodo(){
        $query="SELECT `id_periodo`, `id_asignacion_fk`, `fecha_inscpripcion`, `fecha_altas_bajas`, `updated_at`, `created_at` FROM `periodo`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePeriodo(){
        $query="UPDATE `periodo` SET `id_asignacion_fk` = '".$this->getIdAsignacionFk()."', 
        `fecha_inscripcion` = '".$this->getFechaInscripcion()."', `fecha_altas_bajas` = '".$this->getFechaAltasBajas()."', `updated_at` = current_timestamp()
          WHERE `periodo`.`id_periodo` = '".$this->getIdPeriodo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPeriodo(){
        $query="INSERT into `periodo`(`id_periodo`,`id_asignacion_fk`,`fecha_inscpripcion`,`fecha_altas_bajas`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdPeriodo()."', '".$this->getIdAsignacionFk()."', '".$this->getFechaInscripcion()."', '".$this->getFechaAltasBajas()."', current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeletePeriodo(){
        $query="DELETE FROM `periodo` WHERE `id_periodo`='".$this->getIdPeriodo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}