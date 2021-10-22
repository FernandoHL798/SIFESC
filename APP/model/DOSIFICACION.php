<?php
include_once "CONEXION.php";
class DOSIFICACION extends CONEXION{
    private $id;
    private $numatencion;
    private $fecha;
    private $horario;
    private $fk_alumnonumcuenta;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumatencion()
    {
        return $this->numatencion;
    }
    /**
     * @param mixed $numatencion
     */
    public function setNumatencion($numatencion): void
    {
        $this->numatencion = $numatencion;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }
    /**
     * @param mixed $horario
     */
    public function setHorario($horario): void
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getFkAlumnonumcuenta()
    {
        return $this->fk_alumnonumcuenta;
    }
    /**
     * @param mixed $fk_alumnonumcuenta
     */
    public function setFkAlumnonumcuenta($fk_alumnonumcuenta): void
    {
        $this->fk_alumnonumcuenta = $fk_alumnonumcuenta;
    }

    public function queryconsultaDosificacion(){
        $query="SELECT `id`, `numatencion`, `fecha`, `horario`, `fk_alumnonumcuenta` FROM `dosificacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    /*public function queryUpdateDosificacion(){
        $query="UPDATE `dosificacion` SET `numatencion`='".$this->getNumatencion()."',`fecha`='".$this->getFecha()."',`horario`='".$this->getHorario()."',`fk_alumnonumcuenta`='".$this->getFkAlumnonumcuenta()."'
        WHERE `id`=".$this->getId()"";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    } pensamos que se debe de hacer un nuevo registro por cada dosificacion en vez de encimarlo en caso de altas y bajas*/

    public function queryInsertDosificacion(){
        $query="INSERT into `dosificacion`(`id`,`numatencion`,`fecha`,`horario`,`fk_alumnonumcuenta`) 
        VALUES ('".$this->getId()."', '".$this->getNumatencion()."','".$this->getFecha()."','".$this->getHorario()."','".$this->getFkAlumnonumcuenta()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    /*public function queryDeleteDosificion(){
        $query="DELETE FROM `dosificacion` WHERE `id`='".$this->getId()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    } */
}