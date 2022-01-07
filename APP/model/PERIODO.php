<?php
include_once "CONEXION.php";
class PERIODO extends CONEXION{
    private $id_periodo;
    private $periodo;
    private $fecha_inicio_dosificacion;
    private $fecha_fin_dosificacion;
    private $fecha_inicio_dosificacion_altasbajas;
    private $fecha_baja_dosificacion_altasbajas;
    private $fecha_inscripcion_inicio;
    private $fecha_inscripcion_fin;
    private $fecha_altas_bajas_inicio;
    private $fecha_altas_bajas_fin;
    private $fecha_periodo_inicio;
    private $fecha_periodo_fin;
    private $estatus;
  
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
    public function getPeriodo()
    {
        return $this->periodo;
    }
    /**
     * @param mixed $periodo
     */
    public function setPeriodo($periodo): void
    {
        $this->periodo = $periodo;
    }
    /**
     * @return mixed
     */
    public function getFechaInicioDosifiacion()
    {
        return $this->fecha_inicio_dosificacion;
    }
    /**
     * @param mixed $fecha_inicio_dosificacion
     */
    public function setFechaInicioDosificacion($fecha_inicio_dosificacion): void
    {
        $this->fecha_inicio_dosificacion = $fecha_inicio_dosificacion;
    }
    /**
     * @return mixed
     */
    public function getFechaFinDosificacion()
    {
        return $this->fecha_fin_dosificacion;
    }
    /**
     * @param mixed $fecha_fin_dosificacion
     */
    public function setFechaFinDosificacion($fecha_fin_dosificacion): void
    {
        $this->fecha_fin_dosificacion = $fecha_fin_dosificacion;
    }
    /**
     * @return mixed
     */
    public function getFechaInicioDosifiacionAB()
    {
        return $this->fecha_inicio_dosificacion_altasbajas;
    }
    /**
     * @param mixed $fecha_inicio_dosificacion_altasbajas
     */
    public function setFechaInicioDosificacionAB($fecha_inicio_dosificacion_altasbajas): void
    {
        $this->fecha_inicio_dosificacion_altasbajas = $fecha_inicio_dosificacion_altasbajas;
    }
    /**
     * @return mixed
     */
    public function getFechaBajaDosificacionAB()
    {
        return $this->fecha_baja_dosificacion_altasbajas;
    }
    /**
     * @param mixed $fecha_baja_dosificacion_altasbajas
     */
    public function setFechaBajaDosificacionAB($fecha_baja_dosificacion_altasbajas): void
    {
        $this->fecha_baja_dosificacion_altasbajas = $fecha_baja_dosificacion_altasbajas;
    }
    /**
     * @return mixed
     */
    public function getFechaInscripcionInicio()
    {
        return $this->fecha_inscripcion_inicio;
    }
    /**
     * @param mixed $fecha_inscripcion_inicio
     */
    public function setFechaInscripcion($fecha_inscripcion_inicio): void
    {
        $this->fecha_inscripcion_inicio = $fecha_inscripcion_inicio;
    }

    /**
     * @return mixed
     */
    public function getFechaInscripcionFin()
    {
        return $this->fecha_inscripcion_fin;
    }
    /**
     * @param mixed $fecha_inscripcion_fin
     */
    public function setFechaInscripcionFin($fecha_inscripcion_fin): void
    {
        $this->fecha_inscripcion_fin = $fecha_inscripcion_fin;
    }

    /**
     * @return mixed
     */
    public function getFechaAltasBajasInicio()
    {
        return $this->fecha_altas_bajas_inicio;
    }
    /**
     * @param mixed $fecha_altas_bajas_inicio
     */
    public function setFechaAltasBajasInicio($fecha_altas_bajas_inicio): void
    {
        $this->fecha_altas_bajas_inicio = $fecha_altas_bajas_inicio;
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
    public function getFechaPeriodoInicio()
    {
        return $this->fecha_periodo_inicio;
    }
    /**
     * @param mixed $fecha_periodo_inicio
     */
    public function setFechaPeriodoInicio($fecha_periodo_inicio): void
    {
        $this->fecha_periodo_inicio = $fecha_periodo_inicio;
    }

    /**
     * @return mixed
     */
    public function getFechaPeriodoFin()
    {
        return $this->fecha_periodo_fin;
    }
    /**
     * @param mixed $fecha_periodo_fin
     */
    public function setFechaPeriodoFin($fecha_periodo_fin): void
    {
        $this->fecha_periodo_fin = $fecha_periodo_fin;
    }

    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @param mixed $tipo
     */
    public function setEstatus($estatus): void
    {
        $this->tipo = $estatus;
    }
    
    
    public function queryconsultaPeriodo(){
        $query="SELECT `id_periodo`, `periodo`, `fecha_inicio_dosificacion`, `fecha_fin_dosificacion`, `fecha_inicio_dosificacion_altasbajas`, `fecha_baja_dosificacion_altasbajas`, `fecha_inscripcion_inicio`, `fecha_inscripcion_fin`, `fecha_altas_bajas_inicio`,`fecha_altas_bajas_fin`, `fecha_periodo_inicio`, `fecha_periodo_fin`,`estatus`,`updated_at`, `created_at` FROM `periodo` ORDER by `id_periodo` DESC";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
    public function queryconsultaExistePeriodo($idPeriodo, $Periodo){
        $filtroPeriodo= $idPeriodo>0? "AND id_plantel_fk=".$idPeriodo: "";
        $query="SELECT `fecha_inscripcion_fin`, `fecha_altas_bajas_fin`, `estatus` FROM `periodo` WHERE `periodo` = '".$Periodo."'".$filtroPeriodo;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePeriodo($estatus, $id_period){
        $query="UPDATE `periodo` SET `fecha_periodo_inicio` = '".$this->getFechaPeriodoInicio()."', `fecha_periodo_fin` = '".$this->getFechaPeriodoFin()."',`estatus`='".$estatus."',`updated_at` = current_timestamp()
          WHERE `periodo`='".$this->getIdPeriodo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    public function queryCambiaEstatusPeriodo($params){
        $query="UPDATE `periodo` SET `estatus`='".$params['estatus']."' WHERE `periodo`='".$this->getPeriodo()."' AND `id_periodo`='".$this->getIdPeriodo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertPeriodo(){
        $query="INSERT into `periodo`(`id_periodo`, `periodo`, `fecha_inscripcion_inicio`, `fecha_inscripcion_fin`, `fecha_altas_bajas_inicio`, `fecha_altas_bajas_fin`, `fecha_periodo_inicio`,`fecha_periodo_fin`,`estatus`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdPeriodo()."', '".$this->getPeriodo()."','".$this->getFechaInscripcionInicio()."', '".$this->getFechaInscripcionFin()."', '".$this->getFechaAltasBajasInicio()."', '".$this->getFechaAltasBajasFin()."', '".$this->getFechaPeriodoInicio()."', '".$this->getFechaPeriodoFin()."', '".$this->getEstatus()."', current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    //---------------------DELETE-->
    public function queryUpdateEstatusPeriodo($estatus){
        $query="UPDATE `periodo` SET `estatus`='".$estatus."' WHERE `id_periodo`='".$this->getIdPeriodo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    //Funcion query para traer el ultimo periodo para la dosificacion
    public function queryConsultaPeriodoUltimo(){
        $query="SELECT * FROM periodo ORDER BY id_periodo DESC LIMIT 1;";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;       
    }

/*public function queryconsultaContraUser(){
        $query="SELECT `contrasenia` FROM `usuario`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }*/
}