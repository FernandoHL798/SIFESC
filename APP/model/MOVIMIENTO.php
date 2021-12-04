<?php
include_once "CONEXION.php";
class MOVIMIENTO extends CONEXION{
    private $id_inscripcion_fk;
    private $id_asignacion_fk;
    private $estatus;
    private $calificacion;
    private $aprobado;
  
    /**
     * @return mixed
     */
    public function getIdInscripcionFk()
    {
        return $this->id_inscripcion_fk;
    }
    /**
     * @param mixed $id_inscripcion_fk
     */
    public function setIdInscripcionFk($id_inscripcion_fk): void
    {
        $this->id_inscripcion_fk = $id_inscripcion_fk;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacionFk()
    {
        return $this->id_asignacion_fk;
    }
    /**
     * @param mixed $id_asignacion_fk
     */
    public function setIdAsignacionFk($id_asignacion_fk): void
    {
        $this->id_asignacion_fk = $id_asignacion_fk;
    }
    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @param mixed $estatus
     */
    public function setEstatus($estatus): void
    {
        $this->estatus = $estatus;
    }

     /**
     * @return mixed
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
    /**
     * @param mixed $calificacion
     */
    public function setCalificacion($calificacion): void
    {
        $this->calificacion = $calificacion;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }
    /**
     * @param mixed $aprobado
     */
    public function setAprobado($aprobado): void
    {
        $this->aprobado = $aprobado;
    }
        

    public function queryconsultaMovimiento($idInscripcion){
        $query="SELECT ins.id_periodo_fk, asi.id_asignacion, g.id_grupo, g.nombre_grupo, a.id_asignatura, a.codigo, a.nombre, a.creditos, a.semestre FROM `inscripcion` ins, `movimiento` mov, `asignacion` asi, `asignaturas` a, `grupos` g where ins.id_inscripcion=mov.id_inscripcion_fk and mov.id_asignacion_fk=asi.id_asignacion and asi.id_grupo_fk=g.id_grupo and g.id_asignatura_fk=a.id_asignatura and ins.id_inscripcion=".$idInscripcion;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateMovimiento(){
        $query="UPDATE `movimiento` SET `updated_at` = current_timestamp(), `estatus` = '".$this->getEstatus()."',
         `calificacion` = '".$this->getCalificacion()."', `aprobado` = '".$this->getAprobado()."' WHERE `movimiento`.`id_inscripcion_fk` = '".$this->getIdInscripcionFk()."' AND `movimiento`.`id_asignacion_fk` = '".$this->getIdAsignacionFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertMovimiento(){
        $query="INSERT into `movimiento`(`id_inscripcion_fk`,`id_asignacion_fk`,`updated_at`,`created_at`,`estatus`,`calificacion`,`aprobado`) 
        VALUES ('".$this->getIdInscripcionFk()."', '".$this->getIdAsignacionFk()."', current_timestamp(), current_timestamp(), '".$this->getEstatus()."', '".$this->getCalificacion()."', '".$this->getAprobado()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteMovimiento(){
        $query="DELETE FROM `movimiento` WHERE `id_inscripcion_fk`='".$this->getIdInscripcionFk()."' AND `id_asignacion_fk`='".$this->getIdAsignacionFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}