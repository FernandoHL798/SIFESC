<?php
include_once "CONEXION.php";
class PERIODO extends CONEXION{
    private $id_periodo;
    private $id_asignacion_fk;
    private $fecha_inscp_inicio;
    private $fecha_inscp_fin;
    private $fecha_altas_bajas_in;
    private $fecha_altas_bajas_fin;
    private $updated_at;
    private $created_at;

  
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
    public function getFechaInscpInicio()
    {
        return $this->fecha_inscp_inicio;
    }
    /**
     * @param mixed $fecha_inscp_inicio
     */
    public function setFechaInscpInicio($fecha_inscp_inicio): void
    {
        $this->fecha_inscp_inicio = $fecha_inscp_inicio;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getFechaInscpFin()
    {
        return $this->fecha_inscp_fin;
    }
    /**
     * @param mixed $fecha_inscp_fin
     */
    public function setFechaInscpFin($fecha_inscp_fin): void
    {
        $this->fecha_inscp_fin = $fecha_inscp_fin;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getFechaAltasBajasIn()
    {
        return $this->fecha_altas_bajas_in;
    }
    /**
     * @param mixed $fecha_altas_bajas_in
     */
    public function setFechaAltasBajasIn($fecha_altas_bajas_in): void
    {
        $this->fecha_altas_bajas_in = $fecha_altas_bajas_in;
    }
    
    /**
     * @return mixed
     */
    public function getFechaAltasBajasFin()
    {
        return $this->fecha_altas_bajas_fin;
    }
    /**
     * @param mixed $fecha_altas_bajas_fin
     */
    public function setFechaAltasBajasFin($fecha_altas_bajas_fin): void
    {
        $this->fecha_altas_bajas_fin = $fecha_altas_bajas_fin;
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

    
    public function queryconsultaPeriodo(){
        $query="SELECT `id_periodo`, `id_asignacion_fk`, `fecha_inscp_inicio`, `fecha_inscp_fin`, `fecha_altas_bajas_in`, `fecha_altas_bajas_fin`, `updated_at`, `created_at` FROM `periodo`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePeriodo(){
        $query="UPDATE `periodo` SET `id_asignacion_fk` = '".$this->getIdAsignacionFk()."', `fecha_inscp_inicio` = '".$this->getFechaInscpInicio()."', `fecha_inscp_fin` = '".$this->getFechaInscpFin()."', `fecha_altas_bajas_in` = '".$this->getFechaAltasBajasIn()."', `fecha_altas_bajas_fin` = '".$this->getFechaAltasBajasFin()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `periodo`.`id_periodo` = '".$this->getIdPeriodo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPeriodo(){
        $query="INSERT into `periodo`(`id_periodo`,`id_asignacion_fk`,`fecha_inscp_inicio`,`fecha_inscp_fin`, `fecha_altas_bajas_in`, `fecha_altas_bajas_fin`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdPeriodo()."', '".$this->getIdAsignacionFk()."', '".$this->getFechaInscpInicio()."', '".$this->getFechaInscpFin()."', '".$this->getFechaAltasBajasIn()."', '".$this->getFechaAltasBajasFin()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
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