<?php

class INSCRIBE{
    private $folio;
    private $fk_alumnonumcuenta;
    private $fk_asignaturaclave;
    private $fk_dosID;
    private $periodo;

    /**
     * @return mixed
     */
    public function getFolio()
    {
        return $this->folio;
    }
    /**
     * @param mixed $folio
     */
    public function setFolio($folio): void
    {
        $this->folio = $folio;
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

    /**
     * @return mixed
     */
    public function getFk_asignaturaclave()
    {
        return $this->fk_asignaturaclave;
    }
    /**
     * @param mixed $fk_asignaturaclave
     */
    public function setFk_asignaturaclave($fk_asignaturaclave): void
    {
        $this->fk_asignaturaclave = $fk_asignaturaclave;
    }

    /**
     * @return mixed
     */
    public function getFk_dosID()
    {
        return $this->fk_dosID;
    }
    /**
     * @param mixed $fk_dosID
     */
    public function setFk_dosID($fk_dosID): void
    {
        $this->fk_dosID = $fk_dosID;
    }

    /**
     * @return mixed
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
    /**
     * @param mixed $periodo
     */
    public function setPeriodo($periodo): void
    {
        $this->periodo = $periodo;
    }

}