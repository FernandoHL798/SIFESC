<?php

class ESTUDIA{
	private $fk_alumnonumcuenta;
	private $fk_carreraclave;
	private $turno;
    private $a_ingreso;

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
    public function setFk_alumnonumcuenta($fk_alumnonumcuenta): void
    {
        $this->fk_alumnonumcuenta = $fk_alumnonumcuenta;
    }

    /**
     * @return mixed
     */
    public function getFk_carreraclave()
    {
        return $this->fk_carreraclave;
    }
    /**
     * @param mixed $fk_carreraclave
     */
    public function setFk_carreraclave($fk_carreraclave): void
    {
        $this->fk_carreraclave = $fk_carreraclave;
    }

    /**
     * @return mixed
     */
    public function getTurno()
    {
        return $this->turno;
    }
    /**
     * @param mixed $turno
     */
    public function setTurno($turno): void
    {
        $this->turno = $turno;
    }

    /**
     * @return mixed
     */
    public function getA_ingreso()
    {
        return $this->a_ingreso;
    }
    /**
     * @param mixed $a_ingreso
     */
    public function setA_ingreso($a_ingreso): void
    {
        $this->a_ingreso = $a_ingreso;
    }
}
