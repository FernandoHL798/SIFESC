<?php
include_once "CONEXION.php";
class DEPARTAMENTO extends CONEXION{
    private $id_departamento;
    private $nombre;
    private $id_plantel_fk;
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
    public function getIdPlantelFk()
    {
        return $this->id_plantel_fk;
    }
    /**
     * @param mixed $id_plantel_fk
     */
    public function setIdPlantelFk($id_plantel_fk): void
    {
        $this->id_plantel_fk = $id_plantel_fk;
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

    public function queryconsultaDepartamento($idPlantel){
        $filtroPlantel= $idPlantel>0? " WHERE id_plantel_fk=".$idPlantel: "";
        $query="SELECT `id_departamento`,`nombre`,`id_plantel_fk`, `estatus` FROM `departamentos`".$filtroPlantel;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertDepartamento($params){
        $query="INSERT INTO `departamentos`(`id_departamento`, `nombre`, `id_plantel_fk`, `estatus`) VALUES ('".$this->getIdDepartamento()."','".$this->getNombre()."','".$this->getIdPlantelFk()."','".$params['estatus']."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateDepartamento($estatus,$id_depto){
        $query="UPDATE `departamentos` SET `nombre`='".$this->getNombre()."',`id_plantel_fk`='".$this->getIdPlantelFk()."',`estatus`='".$estatus."', `id_departamento`='".$this->getIdDepartamento()."' WHERE `id_departamento`='".$id_depto."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteDepartamento($estatus){
        $query="UPDATE `departamentos` SET `estatus`='".$estatus."' WHERE `id_departamento`='".$this->getIdDepartamento()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}