<?php
include_once "CONEXION.php";
class USUARIO extends CONEXION{
    private $id_usuario;
    private $cuenta_administrador;
    private $cuenta_alumno;
    private $cuenta_profesor;
    private $nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $correo;
    private $contrasenia;
    private $telefono;
    private $fecha_nacimiento;
    private $pregunta_secreta;
    private $respuesta_secreta;
  
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
    public function getCuentaAdministrador()
    {
        return $this->cuenta_administrador;
    }
    /**
     * @param mixed $cuenta_administrador
     */
    public function setCuentaAdministrador($cuenta_administrador): void
    {
        $this->cuenta_administrador = $cuenta_administrador;
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
    public function getPrimerApellido()
    {
        return $this->primer_apellido;
    }
    /**
     * @param mixed $primer_apellido
     */
    public function setPrimerApellido($primer_apellido): void
    {
        $this->primer_apellido = $primer_apellido;
    }

     /**
     * @return mixed
     */
    public function getSegundoApellido()
    {
        return $this->segundo_apellido;
    }
    /**
     * @param mixed $segundo_apellido
     */
    public function setSegundoApellido($segundo_apellido): void
    {
        $this->segundo_apellido = $segundo_apellido;
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

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }
    /**
     * @param mixed $fecha_nacimiento
     */
    public function setFechaNacimiento($fecha_nacimiento): void
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
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

    
    public function queryconsultaUsuario(){
        $query="SELECT us.id_usuario,us.cuenta_alumno, us.cuenta_profesor, us.cuenta_administrador, 
us.nombre, us.primer_apellido, us.segundo_apellido, us.correo, us.contrasenia, 
us.pregunta_secreta, us.respuesta_secreta FROM `usuario` us WHERE us.correo='".$this->getCorreo()."' AND us.contrasenia='".$this->getContrasenia()."'";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
        /*
        
        function consultaCuentaUsuario(){
        $query="SELECT u.`id_usuario`, u.`id_empresa_fk`, u.`nombre`, u.`apaterno`, u.`amaterno`, u.`user_name`, 
                u.`correo`, u.`password`, u.`nivel_acceso`, u.`path_img`, u.`estado`, 
                 e.`id_empresa`, e.`nombre` as empresaName, e.`razon_social`, e.`rfc`, e.`telefono`,  e.`tipo_cuenta` 
                from usuario u, empresa e 
                where u.id_empresa_fk  = e.id_empresa and u.estado > 0 and u.correo = '".$this->getCorreo()."' and u.password = '".$this->getPassword()."'";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }
        */
    }

    public function queryUpdateRPwdUsuario(){
        $query="UPDATE `alumno` SET `pregunta_secreta` = '".$this->getPreguntaSecreta()."', `respuesta_secreta` = '".$this->getRespuestaSecreta()."', `updated_at` = current_timestamp() WHERE `alumno`.`usuario_id_fk` = '".$this->getUsuarioIdFk()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateUsuario(){
        $query="UPDATE `usuario` SET `cuenta_administrador` = '".$this->getCuentaAdministrador()."', `cuenta_alumno` = '".$this->getCuentaAlumno()."',
         `cuenta_profesor` = '".$this->getCuentaProfesor()."', `nombre` = '".$this->getNombre()."', 
         `primer_apellido` = '".$this->getPrimerApellido()."', `segundo_apellido` = '".$this->getSegundoApellido()."', `correo` = '".$this->getCorreo()."', 
         `telefono` = '".$this->getTelefono()."', `fecha_nacimiento` = '".$this->getFechaNacimiento()."',  WHERE `usuario`.`id_usuario` = '".$this->getIdUsuario()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdatePassword(){
        $query ="UPDATE `usuario` SET `contrasenia`='".$this->getContrasenia()."'WHERE `id_usuario`=".$this->getIdUsuario();
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    public function queryInsertUsuario(){
        $query="INSERT into `usuario`(`id_usuario`,`cuenta_administrador`,`cuenta_alumno`,`cuenta_profesor`,`nombre`, `primer_apellido`, `segundo_apellido`,`correo`,`contrasenia`,`telefono`,`fecha_nacimiento`,`pregunta_secreta`,`respuesta_secreta`) 
        VALUES ('".$this->getIdUsuario()."', '".$this->getCuentaAdministrador()."', '".$this->getCuentaAlumno()."', '".$this->getCuentaProfesor()."', '".$this->getNombre()."', '".$this->getPrimerApellido()."', '".$this->getSegundoApellido()."', '".$this->getCorreo()."','".$this->getContrasenia()."','".$this->getTelefono()."','".$this->getFechaNacimiento()."', '".$this->getPreguntaSecreta()."','".$this->getRespuestaSecreta()."')";
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