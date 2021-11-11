<?php
include_once "CONEXION.php";
class USUARIO extends CONEXION{
    private $id_usuario;
    private $cuenta_admi;
    private $cuenta_alumno;
    private $cuenta_profesor;
    private $nombre;
    private $app;
    private $apm;
    private $correo;
    private $contrasenia;
    private $telefono;
  
    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getCuentaAdmi()
    {
        return $this->cuenta_admi;
    }
    /**
     * @param mixed $cuenta_admi
     */
    public function setCuentaAdmi($cuenta_admi): void
    {
        $this->cuenta_admi = $cuenta_admi;
    }

    /**
     * @return mixed
     */
    public function getCuentaAlumno()
    {
        return $this->cuenta_alumno;
    }
    /**
     * @param mixed $cuenta_alumno
     */
    public function setCuentaAlumno($cuenta_alumno): void
    {
        $this->cuenta_alumno = $cuenta_alumno;
    }

    /**
     * @return mixed
     */
    public function getCuentaProfesor()
    {
        return $this->cuenta_profesor;
    }
    /**
     * @param mixed $cuenta_profesor
     */
    public function setCuentaProfesor($cuenta_profesor): void
    {
        $this->cuenta_profesor = $cuenta_profesor;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

         /**
     * @return mixed
     */
    public function getApp()
    {
        return $this->app;
    }
    /**
     * @param mixed $app
     */
    public function setApp($app): void
    {
        $this->app = $app;
    }

     /**
     * @return mixed
     */
    public function getApm()
    {
        return $this->apm;
    }
    /**
     * @param mixed $apm
     */
    public function setApm($apm): void
    {
        $this->apm = $apm;
    }
    
        /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }
    /**
     * @param mixed $contrasenia
     */
    public function setContrasenia($contrasenia): void
    {
        $this->contrasenia = $contrasenia;
    }

     /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    
    public function queryconsultaUsuario(){
        $query="SELECT `id_usuario`, `cuenta_admi`, `cuenta_alumno`, `cuenta_profesor`, `nombre`, `app`, `apm`, `correo`, `contrasenia`, `telefono` FROM `usuario`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateUsuario(){
        $query="UPDATE `usuario` SET `cuenta_admi` = '".$this->getCuentaAdmi()."', `cuenta_alumno` = '".$this->getCuentaAlumno()."',
         `cuenta_profesor` = '".$this->getCuentaProfesor()."', `nombre` = '".$this->getNombre()."', 
         `app` = '".$this->getApp()."', `apm` = '".$this->getApm()."', `correo` = '".$this->getCorreo()."', 
         `telefono` = '".$this->getTelefono()."' WHERE `usuario`.`id_usuario` = '".$this->getIdUsuario()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertUsuario(){
        $query="INSERT into `usuario`(`id_usuario`,`cuenta_admi`,`cuenta_alumno`,`cuenta_profesor`,`nombre`, `app`, `apm`,`correo`,`contrasenia`,`telefono`) 
        VALUES ('".$this->getIdUsuario()."', '".$this->getCuentaAdmi()."', '".$this->getCuentaAlumno()."', '".$this->getCuentaProfesor()."', '".$this->getNombre()."', '".$this->getApp()."', '".$this->getApm()."', '".$this->getCorreo()."','".$this->getContrasenia()."','".$this->getTelefono()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteUsuario(){
        $query="DELETE FROM `usuario` WHERE `id_usuario`='".$this->getIdUsuario()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}