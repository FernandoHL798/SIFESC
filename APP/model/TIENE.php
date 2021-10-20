<?php

class TIENE{
    private $fk_asignaturaclave;
    private $fk_planestudiosclave;

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
    public function getFk_planestudiosclave()
    {
        return $this->fk_planestudiosclave;
    }
    /**
     * @param mixed $fk_planestudiosclave
     */
    public function setFk_planestudiosclave($fk_planestudiosclave): void
    {
        $this->fk_planestudiosclave = $fk_planestudiosclave;
    }
}