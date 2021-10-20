<?php

class PROPORCIONA{
	private $fk_seRFC;
	private $fk_dosID;

	/**
     * @return mixed
     */
    public function getFk_seRFC()
    {
        return $this->fk_seRFC;
    }
    /**
     * @param mixed $fk_seRFC
     */
    public function setFk_seRFC($fk_seRFC): void
    {
        $this->fk_seRFC = $fk_seRFC;
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
}
