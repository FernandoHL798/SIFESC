<?php

class ALUMNO{
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
    

    //GetData();            Obten Data         Retorna valor array      (SELECT);
    //ExecuteQuery();       Ejecuta la query  retorna valor 1/0 (INSERT,UPDATE DELETE)
    
    public function queryconsultaAlumnos(){
$query="SELECT * FROM alumno";
$this->connect();
$this->getData($query);
$this->close();
    }

}