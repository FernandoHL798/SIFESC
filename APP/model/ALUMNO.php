<?php
include_once "USUARIO.php";
class ALUMNO extends USUARIO{
    private $usuario_id_fk;

    /**
     * @return mixed
     */
    public function getUsuarioIdFk()
    {
        return $this->usuario_id_fk;
    }
    /**
     * @param mixed $usuario_id_fk
     */
    public function setUsuarioIdFk($usuario_id_fk): void
    {
        $this->usuario_id_fk = $usuario_id_fk;
    }

    public function queryconsultaAlumno($idUsuario,$idPlan){
        $filtroUsuario= $idUsuario>0? " AND al.usuario_id_fk=".$idUsuario: "";
        $filtroPlan= $idPlan>0 ? " AND plan.id_plan=".$idPlan : "";
        $query="SELECT us.id_usuario,us.nombre, us.cuenta_alumno,us.primer_apellido, us.telefono, us.fecha_nacimiento, us.correo, us.contrasenia, us.segundo_apellido, est.anio, est.turno, plan.id_plan, plan.nombre_plan, car.id_carrera,car.nombre as nombre_carrera,car.clave as carrera_clave, plat.nombre AS nombre_plantel, plat.id_plantel, fac.nombre_facultad,fac.id_facultad,plan.maximo_creditos, plan.minimo_creditos, plan.maximo_materias, plan.minimo_materias, ins.fecha_inscripcion, ins.fecha_altas_bajas, ins.hora_inscripcion, ins.hora_altas_bajas, ins.id_inscripcion, est.estatus, ins.estatus as estatusInscripcion FROM alumno al, usuario us, estudia est, plandeestudios plan, carrera car, plantel_carrera plan_car, plantel plat, facultad fac, inscripcion ins WHERE est.id_usuarioalumno_fk= al.usuario_id_fk AND est.id_plan_fk= plan.id_plan AND car.id_carrera= plan.id_carrera_fk AND car.id_carrera= plan_car.id_carrera_fk AND plan_car.id_plantel_fk = plat.id_plantel AND fac.id_facultad= plat.id_facultad_fk AND ins.id_usuarioalumno_fk=al.usuario_id_fk AND al.usuario_id_fk = us.id_usuario ".$filtroUsuario.$filtroPlan;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAlumno(){
        $query="INSERT into `alumno`(`usuario_id_fk`,`updated_at`,`created_at`)
        VALUES ('".$this->getUsuarioIdFk()."', current_timestamp(), current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAlumno($id_alumno){
        $query="DELETE FROM `alumno` WHERE `usuario_id_fk`='".$id_alumno."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    /*
    AGREGACION
    */
    /*public function queryUpdateEstatusAlumno(){
        //UPDATE `alumno` SET `estatus`='[value-7]' WHERE `usuario_id_fk`=1
        $query="UPDATE `alumno` SET `estatus`= ".$this->getEstatus().", `updated_at` = current_timestamp()
        WHERE `alumno`.`usuario_id_fk` = '".$this->getUsuarioIdFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }*/
}
