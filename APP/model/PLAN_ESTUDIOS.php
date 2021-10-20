<?php

class PLAN_ESTUDIOS{
	private $clave;
	private $nombre;
	private $fk_carreraclave;
	private $generacion;
	private $semestre;
	private $creditosob;
	private $creditosop;
	private $vigencia;
	private $nivel;
	private $lim_inscrip;

	/**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }
    /**
     * @param mixed $clave
     */
    public function setClave($clave): void
    {
        $this->clave = $clave;
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
    public function getGeneracion()
    {
        return $this->generacion;
    }
    /**
     * @param mixed $generacion
     */
    public function setGeneracion($generacion): void
    {
        $this->generacion = $generacion;
    }

    /**
     * @return mixed
     */
    public function getSemestre()
    {
        return $this->semestre;
    }
    /**
     * @param mixed $semestre
     */
    public function setSemestre($semestre): void
    {
        $this->semestre = $semestre;
    }

    /**
     * @return mixed
     */
    public function getCreditosob()
    {
        return $this->creditosob;
    }
    /**
     * @param mixed $creditosob
     */
    public function setCreditosob($creditosob): void
    {
        $this->creditosob = $creditosob;
    }

    /**
     * @return mixed
     */
    public function getCreditosop()
    {
        return $this->creditosop;
    }
    /**
     * @param mixed $creditosop
     */
    public function setCreditosop($creditosop): void
    {
        $this->creditosop = $creditosop;
    }

    /**
     * @return mixed
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }
    /**
     * @param mixed $vigencia
     */
    public function setVigencia($vigencia): void
    {
        $this->vigencia = $vigencia;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }
    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel): void
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getLim_inscrip()
    {
        return $this->lim_inscrip;
    }
    /**
     * @param mixed $lim_inscrip
     */
    public function setLim_inscrip($lim_inscrip): void
    {
        $this->lim_inscrip = $lim_inscrip;
    }
}