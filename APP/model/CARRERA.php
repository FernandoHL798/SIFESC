<?php
include_once "CONEXION.php";
class CARRERA extends CONEXION{
    private $id_carrera;
    private $id_area_fk;
    private $clave;
    private $nombre;

  
    /**
     * @return mixed
     */
    public function getIdCarrera()
    {
        return $this->id_carrera;
    }
    /**
     * @param mixed $id_carrera
     */
    public function setIdCarrera($id_carrera): void
    {
        $this->id_carrera = $id_carrera;
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

    
    public function queryconsultaCarrera($idPlan){
        $filtro = $idPlan>0 ? " AND p.id_plan=".$idPlan : "";
        $query="SELECT c.id_carrera,c.id_area_fk,c.clave,c.nombre,c.updated_at,c.created_at FROM `carrera` c, `plandeestudios` p WHERE c.id_carrera=p.id_carrera_fk".$filtro;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaCarreraAlumnos($idUsuario){
        $query="SELECT p.id_plantel, plan.id_plan, plan.nombre_plan, c.id_carrera, c.nombre, c.id_area_fk, c.clave, e.anio, e.turno FROM alumno al, plantel p, plandeestudios plan, carrera c, estudia e, plantel_carrera pc WHERE e.id_plan_fk=plan.id_plan and plan.id_carrera_fk=c.id_carrera and al.usuario_id_fk=e.id_usuarioalumno_fk and p.id_plantel=pc.id_plantel_fk and pc.id_carrera_fk=c.id_carrera and al.usuario_id_fk='".$idUsuario."'";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateCarrera(){
        $query="UPDATE `carrera` SET `id_area_fk` = '".$this->getIdAreaFk()."', `clave` = '".$this->getClave()."', `nombre` = '".$this->getNombre()."',
         `updated_at` = current_timestamp() WHERE `carrera`.`id_carrera` = '".$this->getIdCarrera()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertCarrera(){
        $query="INSERT into `carrera`(`id_carrera`,`id_area_fk`,`clave`,`nombre`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdCarrera()."', '".$this->getIdAreaFk()."', '".$this->getClave()."', '".$this->getNombre()."',
        current_timestamp(), current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteCarrera(){
        $query="DELETE FROM `carrera` WHERE `id_carrera`='".$this->getIdCarrera()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
