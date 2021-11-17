<?php
include_once "CONEXION.php";
class ALUMNO extends CONEXION{
    private $usuario_id_fk;
    private $id_generacion_fk;
    private $pregunta_secreta;
    private $respuesta_secreta;
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
    public function getPreguntaSecreta()
    {
        return $this->pregunta_secreta;
    }
    /**
     * @param mixed $pregunta_secreta
     */
    public function setPreguntaSecreta($pregunta_secreta): void
    {
        $this->pregunta_secreta = $pregunta_secreta;
    }

     /**
     * @return mixed
     */
    public function getRespuestaSecreta()
    {
        return $this->respuesta_secreta;
    }
    /**
     * @param mixed $respuesta_secreta
     */
    public function setRespuestaSecreta($respuesta_secreta): void
    {
        $this->respuesta_secreta = $respuesta_secreta;
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
        $query="SELECT `usuario_id_fk`, `id_generacion_fk`, `pregunta_secreta`, `respuesta_secreta`, `updated_at`, `created_at`, `estatus`, `baja` FROM `alumno`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateRPwdAlumno(){
        $query="UPDATE `alumno` SET `pregunta_secreta` = '".$this->getPreguntaSecreta()."', `respuesta_secreta` = '".$this->getRespuestaSecreta()."',
         `updated_at` = current_timestamp() WHERE `alumno`.`usuario_id_fk` = '".$this->getUsuarioIdFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAlumno(){
        $query="INSERT into `alumno`(`usuario_id_fk`,`id_generacion_fk`,`pregunta_secreta`,`respuesta_secreta`,`updated_at`,`created_at`,`estatus`,`baja`) 
        VALUES ('".$this->getUsuarioIdFk()."', '".$this->getIdGeneracionFk()."', '".$this->getPreguntaSecreta()."',
         '".$this->getRespuestaSecreta()."', current_timestamp(),current_timestamp(),
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