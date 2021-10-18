<?php

class ASENTADA{
	private $fk_carreraclave;
	private $fk_plantelclave;

	*/
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
    public function getFk_plantelclave()
    {
        return $this->fk_plantelclave;
    }
    /**
     * @param mixed $fk_plantelclave
     */
    public function setFk_plantelclave($fk_plantelclave): void
    {
        $this->fk_plantelclave = $fk_plantelclave;
    }
}
