<?php
include_once "CONEXION.php";
class ASENTADA extends CONEXION{
	private $fk_carreraclave;
	private $fk_plantelclave;

	*/
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

    public function queryconsultaAsentada(){
        $query="SELECT `fk_carreraclave`, `fk_plantelclave` FROM `asentada`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

   /*public function queryInsertAsentada(){
        $query="INSERT into `asentada`(`fk_carreraclave`,`fk_plantelclave`) 
        VALUES ('".$this->getFkCarreraclave()."', '".$this->getFkPlantelclave()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAsentada(){
        $query="DELETE FROM `asentada` WHERE `fk_carreraclave`='".$this->getFkCarreraclave()."' AND `fk_plantelclave`='".$this->getFkClantelclave()."' ";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }*/
}
