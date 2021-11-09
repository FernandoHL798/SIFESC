<?php
include_once "CONEXION.php";
class ADMINISTRADOR extends CONEXION{
    private $id_usuario_fk;
  
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
    
    public function queryconsultaAdministrador(){
        $query="SELECT `id_usuario_fk` FROM `administrador`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAdministrador(){
        $query="INSERT into `administrador`(`id_usuario_fk`) 
        VALUES ('".$this->getIdUsuarioFk()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAdministrador(){
        $query="DELETE FROM `administrador` WHERE `id_usuario_fk`='".$this->getIdUsuarioFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}