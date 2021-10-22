<?php
include_once "CONEXION.php";
class ASIGNATURA extends CONEXION{
	private $clave;
	private $creditos;
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
    public function getCreditos()
    {
        return $this->creditos;
    }
    /**
     * @param mixed $creditos
     */
    public function setCreditos($creditos): void
    {
        $this->creditos = $creditos;
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

    public function queryconsultaAsignatura(){
        $query="SELECT `clave`, `creditos`, `nombre`, `cupo`, `inscritos` FROM `asignatura`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateAsignatura(){
        $query="UPDATE `asignatura` SET `nombre`='".$this->getNombre()."',`cupo`='".$this->getCupo()."', `inscritos`='".$this->getInscritos()."'
        WHERE `clave`=".$this->getClave()"";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    /*public function queryInsertAsignatura(){
        $query="INSERT into `asignatura`(`clave`,`creditos`,`nombre`,`cupo`,`inscritos`) 
        VALUES ('".$this->getClave()."', '".$this->getCreditos()."','".$this->getNombre()."','".$this->getCupo()."','".$this->getInscritos()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAsignatura(){
        $query="DELETE FROM `asignatura` WHERE `clave`='".$this->getClave()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/
}
