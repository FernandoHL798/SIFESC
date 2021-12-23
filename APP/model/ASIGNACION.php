<?php
include_once "CONEXION.php";
class ASIGNACION extends CONEXION{
    private $id_asignacion;
    private $id_usuarioprofesor_fk;
    private $id_grupo_fk;
    private $id_periodo_fk;
    private $cupo;

  
    /**
     * @return mixed
     */
    public function getIdAsignacion()
    {
        return $this->id_asignacion;
    }
    /**
     * @param mixed $id_asignacion
     */
    public function setIdAsignacion($id_asignacion): void
    {
        $this->id_asignacion = $id_asignacion;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioProfesorFk()
    {
        return $this->id_usuarioprofesor_fk;
    }
    /**
     * @param mixed $id_usuarioprofesor_fk
     */
    public function setIdUsuarioProfesorFk($id_usuarioprofesor_fk): void
    {
        $this->id_usuarioprofesor_fk = $id_usuarioprofesor_fk;
    }

      /**
     * @return mixed
     */
    public function getIdGrupoFk()
    {
        return $this->id_grupo_fk;
    }
    /**
     * @param mixed $id_grupo_fk
     */
    public function setIdGrupoFk($id_grupo_fk): void
    {
        $this->id_grupo_fk = $id_grupo_fk;
    }

    /**
     * @return mixed
     */
    public function getIdPeriodoFk()
    {
        return $this->id_periodo_fk;
    }
    /**
     * @param mixed $id_periodo_fk
     */
    public function setIdPeriodoFk($id_periodo_fk): void
    {
        $this->id_periodo_fk = $id_periodo_fk;
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

    public function queryconsultaAsignacion($id_plan,$idAsignatura,$Periodo){ 
        $filtro = $idAsignatura>0 ? "AND g.id_asignatura_fk =".$idAsignatura : "";
        $filtroPer = $Periodo>0 ? "AND per.periodo ='".$Periodo."'" : "";
        $query="SELECT c.nombre, per.periodo, asi.id_asignatura, asi.nombre,asi.creditos, asi.semestre, asi.caracter, asi.codigo, g.nombre_grupo, a.cupo, a.id_asignacion, a.inscritos  FROM `asignacion` a, `grupos` g, `asignaturas` asi, `carrera` c, `periodo` per, `plantel_carrera` plc, `plantel` p, `plandeestudios` plan where a.id_grupo_fk=g.id_grupo AND g.id_asignatura_fk=asi.id_asignatura AND plc.id_carrera_fk=c.id_carrera AND per.id_periodo=a.id_periodo_fk AND plc.id_plantel_fk=p.id_plantel AND plan.id_plan=asi.id_plan_fk AND plan.id_carrera_fk=c.id_carrera AND asi.id_plan_fk=".$id_plan." ".$filtro." ".$filtroPer." ORDER BY g.nombre_grupo";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateAsignacion(){
         $query="UPDATE `asignacion` SET `cupo` = '".$this->getCupo()."',
         `updated_at` = current_timestamp() WHERE `asignacion`.`id_asignacion` = '".$this->getIdAsignacion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAsignacion(){
        $query="INSERT into `asignacion`(`id_asignacion`,`id_usuarioprofesor_fk`,`id_grupo_fk`,`id_periodo_fk`,`cupo`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdAsignacion()."', '".$this->getIdUsuarioProfesorFk()."', '".$this->getIdGrupoFk()."', '".$this->getIdPeriodoFk()."', '".$this->getCupo()."', current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAsignacion(){
        $query="DELETE FROM `asignacion` WHERE `id_asignacion`='".$this->getIdAsignacion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}