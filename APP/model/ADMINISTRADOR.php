<?php
include_once "USUARIO.php";
class ADMINISTRADOR extends USUARIO{

    public function queryconsultaAdministrador(){
        $query="SELECT `usuario_id_fk` FROM `administrador`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAdministrador($idAdmin){
        $query="INSERT into `administrador`(`usuario_id_fk`) 
        VALUES ('".$idAdmin."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAdministrador($idAdmin){
        $query="DELETE FROM `administrador` WHERE `usuario_id_fk`='".$idAdmin."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}