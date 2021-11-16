<?php
include_once "CONEXION.php";
class PROFESOR extends CONEXION{
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

    public function queryconsultaProfesor(){
        $query="SELECT `id_usuario_fk`, `updated_at`, `created_at`, `estatus` FROM `profesor`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateEstatusProfesor(){
        $query="UPDATE `profesor` SET `updated_at` = current_timestamp(), `estatus` = '".$this->getEstatus()."' WHERE `profesor`.`id_usuario_fk` = '".$this->getIdUsuarioFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertProfesor(){
        $query="INSERT into `profesor`(`id_usuario_fk`,`updated_at`,`created_at`,`estatus`) 
        VALUES ('".$this->getIdUsuarioFk()."', current_timestamp(),current_timestamp(), '".$this->getEstatus()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteProfesor(){
        $query="DELETE FROM `profesor` WHERE `id_usuario_fk`='".$this->getIdUsuarioFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}