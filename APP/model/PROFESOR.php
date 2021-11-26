<?php
include_once "USUARIO.php";
class PROFESOR extends USUARIO{
    private $id_usuario_fk;
    private $id_departamento_fk;
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

    public function queryconsultaProfesor(){
        $query="SELECT pr.`usuario_id_fk`,pr.`estatus`, pr.`id_departamento_fk`, us.cuenta_profesor, us.nombre, 
        us.primer_apellido, us.segundo_apellido, us.correo,us.telefono,us.fecha_nacimiento, dep.nombre AS 
        nombre_departamento, dep.id_area_fk FROM `profesor` pr, usuario us, departamentos dep WHERE pr.usuario_id_fk = us.id_usuario 
        AND pr.id_departamento_fk= dep.id_departamento";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEstatusProfesor(){
        $query="UPDATE `profesor` SET `id_departamento_fk`='".$this->getIdDepartamentoFk()."',`updated_at` = current_timestamp(), `estatus` = '".$this->getEstatus()."' WHERE `profesor`.`usuario_id_fk` = '".$this->getIdUsuarioFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertProfesor(){
        $query="INSERT into `profesor`(`usuario_id_fk`,`id_departamento_fk`,`updated_at`,`created_at`,`estatus`) 
        VALUES ('".$this->getIdUsuarioFk()."','".$this->getIdDepartamentoFk()."', current_timestamp(),current_timestamp(), '".$this->getEstatus()."')";
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