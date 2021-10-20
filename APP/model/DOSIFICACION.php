<?php

class DOCIFICACION{
    private $id;
    private $numatencion;
    private $fecha;
    private $horario;
    private $fk_alumnonumcuenta;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumatencion()
    {
        return $this->numatencion;
    }
    /**
     * @param mixed $numatencion
     */
    public function setNumatencion($numatencion): void
    {
        $this->numatencion = $numatencion;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }
    /**
     * @param mixed $horario
     */
    public function setHorario($horario): void
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getFk_alumnonumcuenta()
    {
        return $this->fk_alumnonumcuenta;
    }
    /**
     * @param mixed $fk_alumnonumcuenta
     */
    public function setFk_alumnonumcuenta($nombre): void
    {
        $this->fk_alumnonumcuenta = $fk_alumnonumcuenta;
    }
}