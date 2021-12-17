<?php
include_once "CONEXION.php";
class DEPARTAMENTO extends CONEXION{
    private $id_departamento;
    private $nombre;
    private $id_area_fk;
    private $estatus;
  
    /**
     * @return mixed
     */
    public function getIdDepartamento()
    {
        return $this->id_departamento;
    }
    /**
     * @param mixed $id_departamento
     */
    public function setIdDepartamento($id_departamento): void
    {
        $this->id_departamento = $id_departamento;
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
    public function getIdAreaFk()
    {
        return $this->id_area_fk;
    }
    /**
     * @param mixed $id_area_fk
     */
    public function setIdAreaFk($id_area_fk): void
    {
        $this->id_area_fk = $id_area_fk;
    }

    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @param mixed $tipo
     */
    public function setEstatus($estatus): void
    {
        $this->tipo = $estatus;
    }

    public function queryconsultaDepartamento(){
        $query="SELECT `id_departamento`,`nombre`,`id_area_fk`, `estatus` FROM `departamentos`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertDepartamento(){
        $query="INSERT INTO `departamentos`(`id_departamento`, `nombre`, `id_area_fk`, `estatus`) VALUES ('".$this->getIdDepartamento()."','".$this->getNombre()."','".$this->getIdAreaFk()."','".$this->getEstatus()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateDepartamento(){
        $query="UPDATE `departamentos` SET `nombre`='".$this->getNombre()."',`id_area_fk`='".$this->getIdAreaFk()."',`estatus`='".$this->getEstatus()."' WHERE `id_departamento`='".$this->getIdDepartamento()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteDepartamento(){
        $query="DELETE FROM `departamentos` WHERE `id_departamento`='".$this->getIdDepartamento()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}