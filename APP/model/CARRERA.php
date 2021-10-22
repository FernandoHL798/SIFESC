<?php
include_once "CONEXION.php";
class CARRERA extends CONEXION{
	private $clave;
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

    public function queryconsultaCarrera(){
        $query="SELECT `clave`, `nombre`, `cupo`, `inscritos` FROM `carrera`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    /*public function queryUpdateCarrera(){
        $query="UPDATE `carrera` SET `nombre`='".$this->getNombre()."',`cupo`='".$this->getCupo()."',`inscritos`='".$this->getInscritos()."' 
        WHERE `clave`='".$this->getClave()"'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertCarrera(){
        $query="INSERT into `carrera`(`clave`,`nombre`,`cupo`,`inscritos`) 
        VALUES ('".$this->getClave()."', '".$this->getNombre()."','".$this->getCupo()."','".$this->getInscritos()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteCarrera(){
        $query="DELETE FROM `carrera` WHERE `clave`='".$this->getClave()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/
}
