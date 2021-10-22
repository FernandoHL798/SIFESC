<?php
include_once "CONEXION.php";
class FACULTAD extends CONEXION{
	private $clave;
	private $fk_plantelclave;
	private $nombre;
	private $cupo;
	private $inscritos;

	/**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }
    /**
     * @param mixed $clave
     */
    public function setClave($clave): void
    {
        $this->clave = $clave;
    }

    /**
     * @return mixed
     */
    public function getFkPlantelclave()
    {
        return $this->fk_plantelclave;
    }
    /**
     * @param mixed $fk_plantelclave
     */
    public function setFkPlantelclave($fk_plantelclave): void
    {
        $this->fk_plantelclave = $fk_plantelclave;
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

    /**
     * @return mixed
     */
    public function getCupo()
    {
        return $this->cupo;
    }
    /**
     * @param mixed $cupo
     */
    public function setCupo($cupo): void
    {
        $this->cupo = $cupo;
    }

    /**
     * @return mixed
     */
    public function getInscritos()
    {
        return $this->inscritos;
    }
    /**
     * @param mixed $inscritos
     */
    public function setInscritos($inscritos): void
    {
        $this->inscritos = $inscritos;
    }

    public function queryconsultaFacultad(){
        $query="SELECT `clave`, `fk_plantelclave`, `nombre`, `cupo`, `inscritos` FROM `facultad`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    /*public function queryUpdateFacultad(){
        $query="UPDATE `facultad` SET `fk_plantelclave`='".$this->getFkPlantelclave()."',`nombre`='".$this->getNombre()."',`cupo`='".$this->getCupo()."',
        `inscritos`='".$this->getInscritos()."'
        WHERE `clave`=".$this->getClave()"";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertFacultad(){
        $query="INSERT into `facultad`(`clave`,`fk_plantelclave`,`nombre`,`cupo`,`inscritos`) 
        VALUES ('".$this->getClave()."', '".$this->getFkPlantelclave()."','".$this->getNombre()."','".$this->getCupo()."','".$this->getInscritos()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteFacultad(){
        $query="DELETE FROM `Facultad` WHERE `clave`='".$this->getClave()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/
}
