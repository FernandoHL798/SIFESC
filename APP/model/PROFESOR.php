<?php

class PROFESOR{
    private $RFCprofesor;
    private $numtrabajador;
    private $nombre;
    private $app;
    private $apm;
    private $correo;

    /**
     * @return mixed
     */
    public function getRFCprofesor()
    {
        return $this->RFCprofesor;
    }
    /**
     * @param mixed $RFCprofesor
     */
    public function setRFCprofesor($RFCprofesor): void
    {
        $this->RFCprofesor = $RFCprofesor;
    }

    /**
     * @return mixed
     */
    public function getNumtrabajador()
    {
        return $this->numtrabajador;
    }
    /**
     * @param mixed $numtrabajador
     */
    public function setNumtrabajador($numtrabajador): void
    {
        $this->numtrabajador = $numtrabajador;
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
    public function setInscritos($apm): void
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
}
