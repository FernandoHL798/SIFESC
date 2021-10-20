<?php

class IMPARTE{
    private $fk_RFCprofesor;
    private $fk_asignaturaclave;
    private $periodo;

    /**
     * @return mixed
     */
    public function getFk_RFCprofesor()
    {
        return $this->fk_RFCprofesor;
    }
    /**
     * @param mixed $fk_RFCprofesor
     */
    public function setFk_RFCprofesor($fk_RFCprofesor): void
    {
        $this->fk_RFCprofesor = $fk_RFCprofesor;
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