<?php
include_once "CONEXION.php";
class FACULTAD extens CONEXION{
	private $id_facultad;
	private $nombre_facultad;

	/*public function getIdFacultad(){
		return $this->id_facultad;
	}

	public function setIdFacultad($id_facultad):void{
		$this->id_facultad=$id_facultad;	
	}*/

	public function getNombreFacultad(){
		return $this->nombre_facultad;
	}

	public function setNombreFacultad($nombre_facultad):void{
		$this->nombre_facultad=$nombre_facultad;	
	}

	public function queryConsultaFacultad(){
		$query="select `id_facultad, nombre_facultad` from `facultad`";
		$this->connect();
		$resultado=$this->getData($query);
		$this->close();
		return $resultado;
	}

}