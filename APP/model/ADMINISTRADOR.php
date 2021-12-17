<?php
include_once "USUARIO.php";
class ADMINISTRADOR extends USUARIO{
    private $estatus;
    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @param mixed $tipo
     */
    public function setEstatus($estatus): void
    {
        $this->tipo = $estatus;
    }

    public function queryconsultaAdministrador(){
        $query="SELECT `usuario_id_fk`,`estatus`,`current_timestamp()`,`current_timestamp()` FROM `administrador`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAdministrador($idAdmin){
        $query="INSERT into `administrador`(`usuario_id_fk`,`updated_at`,`created_at`) 
        VALUES ('".$idAdmin."',current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateAdministrador($estatus,$idAdmin){
        $query="UPDATE `administrador` SET `estatus` = '".$estatus."', `updated_at` = current_timestamp()
          WHERE `administrador`.`usuario_id_fk` = '".$idAdmin."'";
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