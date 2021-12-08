<?php
include_once "CONEXION.php";
class PERIODO_P_ORB extends CONEXION{
	private $id_periodoorb;
	private $periodoorb;
	private $fecha_inscripcionorb;
	private $fecha_altas_bajasorb;


	/**
	* @return mixed
	*/
	public function getIdPeriodoorb()
	{
		return $this->id_periodoorb;
	}
	/**
	* @param mixed $id_periodoorb
	*/
	public function setIdPeriodoorb($id_periodoo): void
	{
		$this->id_periodoorb = $id_periodoo;
	}
		/**
		* @return mixed
		*/
		public function getPeriodoorb()
		{
			return $this->periodoorb;
		}
		/**
		* @param mixed $periodoorb
		*/
		public function setPeriodoorb($periodoorb): void
		{
			$this->periodoorb = $periodoorb;
		}
			/**
			* @return mixed
			*/
			public function getFechaInscripcionorb()
			{
				return $this->fecha_inscripcionorb;
			}
			/**
			* @param mixed $fecha_inscripcionorb
			*/
			public function setFechaInscripcionorb($fecha_inscripcionorb): void
			{
				$this->fecha_inscripcionorb;
			}
				/**
				* @return mixed
				*/
				public function getFechaAltasBajasorb()
				{
					return $this->fecha_altas_bajasorb;
				}
				/**
				* @return mixed $fecha_altas_bajasorb
				*/
				public function setFechaAltasBajasorb($fecha_altas_bajasorb): void
				{
					$this ->fecha_altas_bajasorb = $fecha_altas_bajasorb;
				}

	
    public function queryUpdatePeriodoorb(){
        $query="UPDATE `periodo` SET `periodo` = '".$this->getPeriodoorb()."', `fecha_inscripcionorb` = '".$this->getFechaInscripcionorb()."', `fecha_altas_bajasorb` = '".$this->getFechaAltasBajasorb()."', 
        `updated_at` = current_timestamp() WHERE `periodo`.`periodoorb` = '".$this->getPeriodoorb()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    
    public function queryDeletePeriodoorb(){
        $query="DELETE FROM `periodo` WHERE `periodo`='".$this->getPeriodoorb()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
	public function queryconsultaPeriodoorb(){
        $query="SELECT `id_periodo`, `periodo`, `fecha_inscripcion`, `fecha_altas_bajas`, `created_at`, `updated_at` FROM `periodo`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
	public function queryInsertPeriodoorb(){
        $query="INSERT into `periodo`(`id_periodo`, `periodo`, `fecha_inscripcion`, `fecha_altas_bajas`, `created_at`, `updated_at`) 
        VALUES ('".$this->getIdPeriodoorb()."', '".$this->getPeriodoorb()."', '".$this->getFechaInscripcionorb()."', '".$this->getFechaAltasBajasorb()."', current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

}