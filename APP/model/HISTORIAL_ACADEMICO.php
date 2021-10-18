<?php

class HISTORIAL_ACADEMICO{
	private $id;
	private $fk_asignaturaclave;
	private $fk_alumnonumcuenta;
	private $calif;
	private $creditos;
    private $periodo;

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
    public function getCalif()
    {
        return $this->calif;
    }
    /**
     * @param mixed $calif
     */
    public function setCalif($calif): void
    {
        $this->calif = $calif;
    }

    /**
     * @return mixed
     */
    public function getCreditos()
    {
        return $this->creditos;
    }
    /**
     * @param mixed $creditos
     */
    public function setCreditos($creditos): void
    {
        $this->creditos = $creditos;
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
