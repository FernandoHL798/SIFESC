<?php
include_once "CONEXION.php";
class ALUMNO extends CONEXION{
    private $usuario_id_fk;
    private $id_generacion_fk;
    private $request_pw;
    private $ans_request;
    private $updated_at;
    private $created_at;
    private $estatus;
    private $baja;
  
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

    /**
     * @return mixed
     */
    public function getIdGeneracionFk()
    {
        return $this->id_generacion_fk;
    }
    /**
     * @param mixed $id_generacion_fk
     */
    public function setIdGeneracionFk($id_generacion_fk): void
    {
        $this->id_generacion_fk = $id_generacion_fk;
    }

    /**
     * @return mixed
     */
    public function getRequestPw()
    {
        return $this->request_pw;
    }
    /**
     * @param mixed $request_pw
     */
    public function setRequestPw($request_pw): void
    {
        $this->request_pw = $request_pw;
    }

     /**
     * @return mixed
     */
    public function getAnsRequest()
    {
        return $this->ans_request;
    }
    /**
     * @param mixed $ans_request
     */
    public function setAnsRequest($ans_request): void
    {
        $this->ans_request = $ans_request;
    }
     /**
     * @return mixed
     */

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
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
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
    
    
    public function queryconsultaAlumno(){
        $query="SELECT `usuario_id_fk`, `id_generacion_fk`, `request_pw`, `ans_request`, `updated_at`, `created_at`, `estatus`, `baja` FROM `alumno`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateRPwdAlumno(){
        $query="UPDATE `alumno` SET `request_pw` = '".$this->getRequestPw()."', `ans_request` = '".$this->getAnsRequest()."',
         `updated_at` = current_timestamp() WHERE `alumno`.`usuario_id_fk` = '".$this->getUsuarioIdFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAlumno(){
        $query="INSERT into `alumno`(`usuario_id_fk`,`id_generacion_fk`,`request_pw`,`ans_request`,`updated_at`,`created_at`,`estatus`,`baja`) 
        VALUES ('".$this->getUsuarioIdFk()."', '".$this->getIdGeneracionFk()."', '".$this->getRequestPw()."',
         '".$this->getAnsRequest()."', current_timestamp(),current_timestamp(),
          '".$this->getEstatus()."','".$this->getBaja()."')";
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
    public function queryUpdateEstatusAlumno(){
        //UPDATE `alumno` SET `estatus`='[value-7]' WHERE `usuario_id_fk`=1
        $query="UPDATE `alumno` SET `estatus`= ".$this->getEstatus().", `updated_at` = current_timestamp() 
        WHERE `alumno`.`usuario_id_fk` = '".$this->getUsuarioIdFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}