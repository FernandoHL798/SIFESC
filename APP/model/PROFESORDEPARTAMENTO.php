<?php
include_once "CONEXION.php";
class PROFESORDEPARTAMENTO extends CONEXION{
    private $id_usuarioprofesor_fk;
    private $estatus;
    private $id_departamento_fk;
    
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
    public function getIdDepartamentoFk()
    {
        return $this->id_departamento_fk;
    }
    /**
     * @param mixed $id_departamento_fk
     */
    public function setIdDepartamentoFk($id_departamento_fk): void
    {
        $this->id_departamento_fk = $id_departamento_fk;
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

    public function queryconsultaProfesordepartamento(){
        $query="SELECT `usuarioprofesor_id_fk`, `created_at`, `updated_at`, `estatus`, `departamento_id_fk` FROM `profesor_departamento`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEstatusProfesordepartamento(){
        $query="UPDATE `profesor_departamento` SET `updated_at` = current_timestamp(), `estatus` = '".$this->getEstatus()."' WHERE `usuarioprofesor_id_fk` = '".$this->getIdUsuarioFk()."' AND `id_departamento_fk`='".$this->getIdDepartamentoFk()."',";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertProfesordepartamento(){
        $query="INSERT into `profesor_departamento`(`usuarioprofesor_id_fk`,`updated_at`,`created_at`,`estatus`,`id_departamento_fk`) 
        VALUES ('".$this->getIdUsuarioProfesorFk()."', current_timestamp(),current_timestamp(), '".$this->getEstatus()."', '".$this->getIdDepartamentoFk()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteProfesordepartamento(){
        $query="DELETE FROM `profesor_departamento` WHERE `usuarioprofesor_id_fk`='".$this->getIdUsuarioProfesorFk()."' AND `id_departamento_fk`='".$this->getIdDepartamentoFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}