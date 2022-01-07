<?php
include_once "CONEXION.php";
class HORARIO extends CONEXION{
    private $id_horario;
    private $id_grupo_fk;
    private $id_salon_fk;
    private $inicio;
    private $fin;
    private $duracion;
    private $dia;

  
    /**
     * @return mixed
     */
    public function getIdHorario()
    {
        return $this->id_horario;
    }
    /**
     * @param mixed $id_horario
     */
    public function setIdHorario($id_horario): void
    {
        $this->id_horario = $id_horario;
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
    public function getIdSalonFk()
    {
        return $this->id_salon_fk;
    }
    /**
     * @param mixed $id_salon_fk
     */
    public function setIdSalonFk($id_salon_fk): void
    {
        $this->id_salon_fk = $id_salon_fk;
    }

     /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }
    /**
     * @param mixed $inicio
     */
    public function setInicio($inicio): void
    {
        $this->inicio = $inicio;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }
    /**
     * @param mixed $fin
     */
    public function setFin($fin): void
    {
        $this->fin = $fin;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->duracion;
    }
    /**
     * @param mixed $duracion
     */
    public function setDuracion($duracion): void
    {
        $this->duracion = $duracion;
    }
    
    /**
     * @return mixed
     */
    public function getDia()
    {
        return $this->dia;
    }
    /**
     * @param mixed $dia
     */
    public function setDia($dia): void
    {
        $this->dia = $dia;
    }
    
    public function queryconsultaHorario($idInscripcion){
        $query="SELECT asi.nombre, h.dia, h.inicio, h.fin FROM asignaturas asi, asignacion a, inscripcion i, movimiento m, grupos g, horario h WHERE a.id_asignacion=m.id_asignacion_fk AND m.id_inscripcion_fk=i.id_inscripcion AND g.id_grupo=a.id_grupo_fk AND h.id_grupo_fk=g.id_grupo AND asi.id_asignatura=g.id_asignatura_fk AND m.id_inscripcion_fk=".$idInscripcion." AND m.estatus=1";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateHorario(){
        $query="UPDATE `horario` SET `id_grupo_fk` = '".$this->getIdGrupoFk()."', `id_salon_fk` = '".$this->getIdSalonFk()."',
         `inicio` = '".$this->getInicio()."', `fin` = '".$this->getFin()."', `duracion` = '".$this->getDuracion()."',
          `dia` = '".$this->getDia()."', `updated_at` = current_timestamp() WHERE `horario`.`id_horario` = '".$this->getIdHorario()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertHorario(){
        $query="INSERT into `horario`(`id_horario`,`id_grupo_fk`,`id_salon_fk`,`inicio`,`fin`, `duracion`, `dia`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdHorario()."', '".$this->getIdGrupoFk()."', '".$this->getIdSalonFk()."', 
        '".$this->getInicio()."', '".$this->getFin()."', '".$this->getDuracion()."', '".$this->getDia()."', 
        current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteHorario(){
        $query="DELETE FROM `horario` WHERE `id_horario`='".$this->getIdHorario()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}