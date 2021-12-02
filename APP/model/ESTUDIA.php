<?php
include_once "CONEXION.php";
class ESTUDIA extends CONEXION{ 
    private $id_usuarioalumno_fk;//quitar idgeneracion, agregar id usuarioalumno
    private $id_plan_fk;
    private $anio;
    private $turno;//turno en el que estudia
    private $baja;//bajas que ha metido
    private $estatus;//estado del alumno: activo o baja



  
    /**
     * @return mixed
     *///ID_USUARIOALUMNO_FK
    public function getIdUsuarioAlumnoFk()
    {
        return $this->id_usuarioalumno_fk;//idusuarioalumno y id plan_fk
    }
    /**
     * @param mixed $id_usuarioalumno_fk
     */
    public function setIdUsuarioAlumnoFk($id_usuarioalumno_fk): void
    {
        $this->id_usuarioalumno_fk = $id_usuarioalumno_fk;
    }

    /**
     * @return mixed
     *///ID_PLAN_FK
    public function getIdPlanFk()
    {
        return $this->id_plan_fk;//D: Ah no es cada atributo
    }
    /**
     * @param mixed $id_plan_fk
     */
    public function setIdPlanFk($id_plan_fk): void
    {
        $this->id_plan_fk = $id_plan_fk;
    }

      /**
     * @return mixed
     *///ANIO
    public function getAnio()
    {
        return $this->anio;
    }
    /**
     * @param mixed $anio
     */
    public function setAnio($anio): void
    {
        $this->anio = $anio;
    }

    /**
     * @return mixed
     *///TURNO
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
     *///BAJA
    public function getBaja()
    {
        return $this->baja;
    }
    /**
     * @param mixed $baja
     */
    public function setBaja($baja): void
    {
        $this->baja = $baja;
    }

    /**
     * @return mixed
     *///ESTATUS
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


    public function queryconsultaEstudia(){
        $query="SELECT `id_usuarioalumno_fk`, `id_plan_fk`, `anio`, `turno`, `baja`, `estatus`,  `updated_at`, `created_at` FROM `estudia`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEstudia(){
        $query="UPDATE `estudia` SET  `anio` = '".$this->getAnio()."',`turno` = '".$this->getTurno()."', `baja` = '".$this->getBaja()."',
         `updated_at` = current_timestamp() WHERE `estudia`.`id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."' AND `estudia`.`id_plan_fk` = '".$this->getIdPlanFk()."'";
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertEstudia(){
        $query="INSERT into `estudia`(`id_usuarioalumno_fk`,`id_plan_fk`,`anio`, `baja`, `estatus`,`turno`,`created_at`,`updated_at`) 
        VALUES ('".$this->getIdUsuarioAlumnoFk()."', '".$this->getIdPlanFk()."', '".$this->getAnio()."', '".$this->getBaja()."', '".$this->getEstatus()."', '".$this->getTurno()."', current_timestamp(),
        current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteEstudia(){
        $query="DELETE FROM `estudia` WHERE `estudia`.`id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."' AND `estudia`.`id_plan_fk` = '".$this->getIdPlanFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEstatusEstudia(){
        //UPDATE `alumno` SET `estatus`='[value-7]' WHERE `usuario_id_fk`=1
        $query="UPDATE `estudia` SET `estatus`= ".$this->getEstatus().", `updated_at` = current_timestamp() 
        WHERE `estudia`.`id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."' AND `estudia`.`id_plan_fk` = '".$this->getIdPlanFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

}