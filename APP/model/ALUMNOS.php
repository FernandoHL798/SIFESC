<?php
include_once "CONEXION.php";
class ALUMNO extends CONEXION{
    //Tomamos los atributos de las entidades de la DB y los convertimos en variables
    // private, public, protected, ***** default *****
    private $numcuenta;
    private $nombre;
    private $app;
    private $apm;
    private $fecha_nacimiento;
    private $correo;
    private $pwd;
    private $pregunta;
    private $respuesta;

    // Getters & Setters
    /* Get= Obten tal cosa, Set= Dale el valor
                Encapsulamiento
        PETICIONES;
        /Query/
        FUNCIONALIDAD DE UNA BASE DE DATOS
        CRUD
        Create  Insert
        Read    Select 
        Update  Update
        Delete  Delete
    */
    /**
     * @return mixed
     */
    public function getNumCuenta()
    {
        return $this->numcuenta;
    }

    /**
     * @param mixed $numcuenta
     */
    public function setNumCuenta($numcuenta): void
    {
        $this->numcuenta = $numcuenta;
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
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd): void
    {
        $this->pwd = $pwd;
    }
     
    /**
     * @return mixed
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * @param mixed $pregunta
     */
    public function setPregunta($pregunta): void
    {
        $this->pregunta = $pregunta;
    }
    
    /**
     * @return mixed
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * @param mixed $respuesta
     */
    public function setRespuesta($respuesta): void
    {
        $this->respuesta = $respuesta;
    }


    //GetData();            Obten Data         Retorna valor array      (SELECT);
    //ExecuteQuery();       Ejecuta la query  retorna valor 1/0 (INSERT,UPDATE DELETE)
    
    public function queryconsultaAlumnos(){
        $query="SELECT * FROM alumno";
        $this->connect();
        $this->getData($query);
        $this->close();
    }

}