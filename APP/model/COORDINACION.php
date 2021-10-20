<?php

class COORDINACION{
	private $fk_carreraclave;
	private $fk_profesorRFC;
	private $nombre;

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
    public function getFk_profesorRFC()
    {
        return $this->fk_profesorRFC;
    }
    /**
     * @param mixed $fk_profesorRFC
     */
    public function setFk_profesorRFC($fk_profesorRFC): void
    {
        $this->fk_profesorRFC = $fk_profesorRFC;
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
}
