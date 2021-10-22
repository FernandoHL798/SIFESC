<?php
include_once "CONEXION.php";
class ESTUDIA extends CONEXION{
	private $fk_alumnonumcuenta;
	private $fk_carreraclave;
	private $turno;
    private $a_ingreso;

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
    public function getTurno()
    {
        return $this->turno;
    }
    /**
     * @param mixed $turno
     */
    public function setTurno($turno): void
    {
        $this->turno = $turno;
    }

    /**
     * @return mixed
     */
    public function getAIngreso()
    {
        return $this->a_ingreso;
    }
    /**
     * @param mixed $a_ingreso
     */
    public function setAIngreso($a_ingreso): void
    {
        $this->a_ingreso = $a_ingreso;
    }

    public function queryconsultaEstudia(){
        $query="SELECT `fk_alumnonumcuenta`, `fk_carreraclave`, `turno`, `a_ingreso` FROM `estudia`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    /*public function queryUpdateEstudia(){
        $query="UPDATE `estudia` SET `fk_carreraclave`='".$this->getFkCarreraclave()."',`turno`='".$this->getTurno()."',`a_ingreso`='".$this->getAIngreso()."'
        WHERE `fk_alumnonumcuenta`='".$this->getFkAlumnonumcuenta()."' AND `fk_carreraclave`='".$this->getFkCarreraclave()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/

    public function queryInsertEstudia(){
        $query="INSERT into `estudia`(`fk_alumnonumcuenta`,`fk_carreraclave`,`turno`,`a_ingreso`)
        VALUES ('".$this->getFkAlumnonumcuenta()."', '".$this->getFkCarreraclave()."','".$this->getTurno()."','".$this->getAIngreso()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    /*public function queryDeleteEstudia(){
        $query="DELETE FROM `estudia` WHERE `fk_carreraclave`='".$this->getFkCarreraclave()."' AND `fk_alumnonumcuenta`='".$this->getFkAlumnonumcuenta()."' ";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/
}
