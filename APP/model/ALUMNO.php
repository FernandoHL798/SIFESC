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

    public function queryconsultaAlumno(){
        $query="SELECT `usuario_id_fk`,`updated_at`, `created_at` FROM `alumno`";
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
