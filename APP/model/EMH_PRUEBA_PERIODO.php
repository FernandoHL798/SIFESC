<?php
include_once "CONEXION.php";
class PERIODO extends CONEXION{
	private $id_periodo;
	private $periodo;
	private $fecha_inscripcion;
	private $fecha_altas_bajas;
	

	/* GET Y SE DE id_ periodo ............................................*/
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

    /* GET Y SE DE periodo ..................................................*/
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

    /* GET Y SE DE fecha_inscripcion ............................................*/

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

    /* GET Y SE DE fecha_altas_bajas ............................................*/

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

	/* QUERY CONSULTA PERIODO .....................................................*/
    public function queryconsultaPeriodo(){
    	$query = "SELECT `id_periodo`, `periodo`, `fecha_inscripcion`, `fecha_altas_bajas`, `created_at`, `updated_at` FROM `periodo`";
    	$this -> connect();
    	$resultado = $this -> getData($query);
    	$this->close();
    	return $resultado; 
    }

	/* QUERY ACTULIZAR PERIODO .....................................................*/
    public function queryUpdatePeriodo(){
    	$query = "UPDATE `periodo` SET `periodo` = '".$this -> getPeriodo()."', `fecha_inscripcion` = '".$this -> getFechaInscripcion()."', `fecha_altas_bajas` = '".$this -> getFechaAltasBajas()."', `updated_at` = current_timestamp() WHERE `periodo`.`id_periodo` = '".$this -> getIdPeriodo()."'";
    	$this -> connect();
    	$resultado = $this -> executeInstruction($query);
    	$this -> close();
    	return $resultado;
    }

	/* QUERY INSERTAR PERIODO .....................................................*/
    public function queryInsertPeriodo(){
    	$query = "INSERT into `periodo`(`id_periodo`,`periodo`,`fecha_inscripcion`,`fecha_altas_bajas`,`created_at`,`updated_at`) VALUES ('".$this -> getIdPeriodo()."', '".$this -> getPeriodo()."', '".$this -> getFechaInscripcion()."', '".$this -> getFechaAltasBajas()."', current_timestamp(), current_timestamp())";
    	$this -> connect();
    	$resultado = $this->executeInstruction($query);
    	$this -> close();
    	return $resultado;
    }

	/* QUERY ELIMINAR PERIODO .....................................................*/
    public function queryDeletePeriodo(){
    	$query = "DELETE FROM `periodo` where `id_periodo` = '".$this -> getIdPeriodo()."'";
    	$this -> connect();
    	$resultado = $this -> executeInstruction($query);
    	$this -> close();
    	return $resultado;
    }

}

