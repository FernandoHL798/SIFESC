<?php
include_once "CONEXION.php";
class COORDINACION extends CONEXION{
	private $fk_carreraclave;
	private $fk_profesorRFC;
	private $nombre;

	/**
     * @return mixed
     */
    public function getFkCarreraclave()
    {
        return $this->fk_carreraclave;
    }
    /**
     * @param mixed $fk_carreraclave
     */
    public function setFkCarreraclave($fk_carreraclave): void
    {
        $this->fk_carreraclave = $fk_carreraclave;
    }

    /**
     * @return mixed
     */
    public function getFkProfesorRFC()
    {
        return $this->fk_profesorRFC;
    }
    /**
     * @param mixed $fk_profesorRFC
     */
    public function setFkProfesorRFC($fk_profesorRFC): void
    {
        $this->fk_profesorRFC = $fk_profesorRFC;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function queryconsultaCoordinacion(){
        $query="SELECT `fk_carreraclave`, `fk_profesorRFC`, `nombre` FROM `coordinacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    /*public function queryUpdateCoordinacion(){
        $query="UPDATE `coordinacion` SET `nombre`='".$this->getNombre()."'
        WHERE `fk_carreraclave`='".$this->getFkCarreraclave()"' AND `fk_profesorRFC`='".$this->getFkProfesorRFC()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertCoordinacion(){
        $query="INSERT into `coordinacion`(`fk_carreraclave`,`fk_profesorRFC`,`nombre`) 
        VALUES (".$this->getFkCarreraclave().", ".$this->getFkProfesorRFC().",".$this->getNombre().")";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAlumno(){
        $query="DELETE FROM `dosificacion` WHERE `fk_carreraclave`='".$this->getFkCarreraclave()"' AND `fk_profesorRFC`='".$this->getFkProfesorRFC()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/
}
