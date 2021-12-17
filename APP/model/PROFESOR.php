<?php
include_once "USUARIO.php";
class PROFESOR extends USUARIO{
    private $id_usuario_fk;
    private $estatus;  
    /**
     * @return mixed
     */
    public function getIdUsuarioFk()
    {
        return $this->id_usuario_fk;
    }
    /**
     * @param mixed $id_usuario_fk
     */
    public function setIdUsuarioFk($id_usuario_fk): void
    {
        $this->id_usuario_fk = $id_usuario_fk;
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

    public function queryconsultaProfesor($idProfesor){
        $filtroIdProf = $idProfesor>0 ? " AND pr.usuario_id_fk=".$idProfesor : "";
        $query="SELECT pr.`usuario_id_fk`,pr.`estatus`, us.cuenta_profesor, us.nombre as nombre_profesor, us.primer_apellido, us.segundo_apellido, us.correo,us.telefono,us.fecha_nacimiento,pl.nombre as nombre_plantel, pl.id_plantel FROM `profesor` pr, usuario us, asignacion asi, grupos g, asignaturas a, plandeestudios plan, carrera car, plantel_carrera plc, plantel pl WHERE us.id_usuario= pr.usuario_id_fk AND pr.usuario_id_fk= asi.id_usuarioprofesor_fk AND asi.id_grupo_fk= g.id_grupo AND a.id_asignatura= g.id_asignatura_fk AND plan.id_plan= a.id_plan_fk AND car.id_carrera = plan.id_carrera_fk AND plc.id_carrera_fk = car.id_carrera AND pl.id_plantel= plc.id_plantel_fk".$filtroIdProf." GROUP BY pr.usuario_id_fk";    
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
     public function queryconsultaNombreProfesor($idProfesor){
        $query="SELECT u.nombre, u.primer_apellido, u.segundo_apellido FROM usuario u, profesor p WHERE p.usuario_id_fk=u.id_usuario and p.usuario_id_fk=".$idProfesor;    
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEstatusProfesor(){
        $query="UPDATE `profesor` SET `updated_at` = current_timestamp(), `estatus` = '".$this->getEstatus()."' WHERE `profesor`.`usuario_id_fk` = '".$this->getIdUsuarioFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertProfesor(){
        $query="INSERT into `profesor`(`usuario_id_fk`,`updated_at`,`created_at`,`estatus`) 
        VALUES ('".$this->getIdUsuarioFk()."',current_timestamp(),current_timestamp(), '".$this->getEstatus()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteProfesor(){
        $query="DELETE FROM `profesor` WHERE `usuario_id_fk`='".$this->getIdUsuarioFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}