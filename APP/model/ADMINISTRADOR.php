<?php
include_once "CONEXION.php";
class ADMINISTRADOR extends CONEXION{

    public function queryconsultaAdministrador(){
        $query="SELECT `id_usuario_fk` FROM `administrador`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAdministrador($idAdmin){
        $query="INSERT into `administrador`(`id_usuario_fk`) 
        VALUES ('".$idAdmin."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAdministrador($idAdmin){
        $query="DELETE FROM `administrador` WHERE `id_usuario_fk`='".$idAdmin."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}