<?php
include_once "CONEXION.php";
class GRUPOS extends CONEXION{
    private $id_grupo;
    private $id_asignatura_fk;
    private $nombre_grupo;
    private $turno;
    private $tipo;
    private $estatus;

  
    /**
     * @return mixed
     */
    public function getIdGrupo()
    {
        return $this->id_grupo;
    }
    /**
     * @param mixed $id_grupo
     */
    public function setIdGrupo($id_grupo): void
    {
        $this->id_grupo = $id_grupo;
    }

    /**
     * @return mixed
     */
    public function getIdAsignaturaFk()
    {
        return $this->id_asignatura_fk;
    }
    /**
     * @param mixed $id_asignatura_fk
     */
    public function setIdAsignaturaFk($id_asignatura_fk): void
    {
        $this->id_asignatura_fk = $id_asignatura_fk;
    }

     /**
     * @return mixed
     */
    public function getNombreGrupo()
    {
        return $this->nombre_grupo;
    }
    /**
     * @param mixed $nombre_grupo
     */
    public function setNombreGrupo($nombre_grupo): void
    {
        $this->nombre_grupo = $nombre_grupo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
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

    
    public function queryconsultaGrupos($idAsignatura,$idProfesor,$periodo){
        $filterProfesor= $idProfesor>0 ? " AND asi.id_usuarioprofesor_fk=".$idProfesor : "";
        $filterAsignatura= $idAsignatura>0 ? " AND g.id_asignatura_fk=".$idAsignatura : "";
        $query="SELECT plan.anio_plan, plan.id_plan, car.nombre as nombre_carrera, a.codigo, a.nombre as nombre_asignatura, g.nombre_grupo, g.turno, per.periodo, g.estatus, a.semestre, asi.inscritos, asi.id_asignacion, g.id_grupo FROM grupos g,asignacion asi, asignaturas a, plandeestudios plan, carrera car, periodo per where g.id_grupo = asi.id_grupo_fk AND a.id_asignatura= g.`id_asignatura_fk` AND plan.id_plan=a.id_plan_fk AND car.id_carrera= plan.id_carrera_fk AND per.id_periodo=asi.id_periodo_fk AND per.periodo='".$periodo."'".$filterProfesor."".$filterAsignatura;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaGruposPeriodo($idAsignatura,$idProfesor,$idPeriodo){
        $filterProfesor= $idProfesor>0 ? " AND asi.id_usuarioprofesor_fk=".$idProfesor : "";
        $filterAsignatura= $idAsignatura>0 ? " AND g.id_asignatura_fk=".$idAsignatura : "";
        $query="SELECT plan.anio_plan, plan.id_plan, car.nombre as nombre_carrera, a.codigo, a.nombre as nombre_asignatura, g.nombre_grupo, a.semestre, asi.inscritos, asi.id_asignacion, g.tipo FROM grupos g, asignacion asi, asignaturas a, plandeestudios plan, carrera car, periodo per where g.id_grupo = asi.id_grupo_fk AND a.id_asignatura= g.`id_asignatura_fk` AND plan.id_plan=a.id_plan_fk AND car.id_carrera= plan.id_carrera_fk AND per.id_periodo=asi.id_periodo_fk AND per.id_periodo=".$idPeriodo."".$filterProfesor."".$filterAsignatura;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaGruposAsignatura($idAsignacion,$idProfesor){
        $filterProfesor= $idProfesor>0 ? " AND asi.id_usuarioprofesor_fk=".$idProfesor : "";
        $query="SELECT a.codigo, p.nombre_plan, c.nombre as nombre_carrera, a.nombre as nombre_asignatura, g.nombre_grupo, a.semestre FROM plandeestudios p, grupos g, asignaturas a, carrera c, asignacion asi WHERE p.id_plan=a.id_plan_fk and g.id_asignatura_fk=a.id_asignatura and c.id_carrera=p.id_carrera_fk and asi.id_grupo_fk=g.id_grupo and asi.id_asignacion=".$idAsignacion."".$filterProfesor;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateGrupos(){
        $query="UPDATE `grupos` SET `id_asignatura_fk` = '".$this->getIdAsignaturaFk()."', 
        `nombre_grupo` = '".$this->getNombreGrupo()."', `tipo`='".$this->getTipo()."', `turno`='".$this->getTurno()."', `estatus`='".$this->getEstatus()."',`updated_at` = current_timestamp() WHERE `grupos`.`id_grupo` = '".$this->getIdGrupo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertGrupos(){
        $query="INSERT into `grupos`(`id_grupo`,`id_asignatura_fk`,`nombre_grupo`,`turno`,`tipo`,`estatus`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdGrupo()."', '".$this->getIdAsignaturaFk()."', '".$this->getNombreGrupo()."', '".$this->getTurno()."', '".$this->getTipo()."','".$this->getEstatus()."', 
        current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteGrupos(){
        $query="DELETE FROM `grupos` WHERE `id_grupo`='".$this->getIdGrupo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    public function queryconsultaGruposAsignaturas($id_plan_fk,$id_asignatura_fk){
        /*$query= "SELECT * FROM grupos g, asignaturas asi WHERE g.id_asignatura_fk=asi.id_asignatura AND asi.id_plan_fk=".$id_plan_fk." AND asi.codigo =".$codigo;
        $query= "SELECT g.id_grupo, g.id_asignatura_fk, g.nombre_grupo, g.tipo, g.turno, g.estatus, asi.id_asignatura, asi.codigo, asi.nombre, asi.creditos, asi.caracter, asi.semestre FROM grupos g, asignaturas asi WHERE g.id_asignatura_fk=asi.id_asignatura AND asi.id_plan_fk=".$id_plan_fk." AND asi.codigo =".$codigo;*/
        $query= "SELECT g.id_grupo, g.id_asignatura_fk, g.nombre_grupo, g.tipo, g.turno, g.estatus, asi.id_asignatura, asi.codigo, asi.nombre, asi.creditos, asi.caracter, asi.semestre FROM grupos g, asignaturas asi WHERE asi.id_plan_fk=".$id_plan_fk." AND g.id_asignatura_fk=".$id_asignatura_fk." AND asi.id_asignatura=".$id_asignatura_fk;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateGruposAs($id_grupo,$estatus){
        $query="UPDATE `grupos` SET `estatus`='".$estatus."' WHERE `id_grupo` =".$id_grupo;
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaExisteGrupo($id_plan_fk,$id_asignatura_fk,$nombre_grupo){
        $query= "SELECT g.id_grupo, g.id_asignatura_fk, g.nombre_grupo, g.tipo, g.turno, g.estatus, asi.id_asignatura, asi.codigo, asi.nombre, asi.creditos, asi.caracter, asi.semestre FROM grupos g, asignaturas asi WHERE asi.id_plan_fk=".$id_plan_fk." AND g.id_asignatura_fk=".$id_asignatura_fk." AND asi.id_asignatura=".$id_asignatura_fk." AND g.nombre_grupo =".$nombre_grupo;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaDatosGrupo($id_plan_fk,$id_asignatura_fk){
        $query= "SELECT * FROM asignaturas asi WHERE asi.id_plan_fk=".$id_plan_fk." AND asi.id_asignatura=".$id_asignatura_fk;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
}
