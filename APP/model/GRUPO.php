<?php
include_once "CONEXION.php";
class GRUPO extends CONEXION{
    private $id;
    private $fk_carreraclave;
    private $fk_asignaturaclave;
    private $fk_grupoclave;
    private $aula;
    private $dialu;
    private $diama;
    private $diami;
    private $diaju;
    private $diavi;
    private $diasa;
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
    public function getFkCarreraclave()
    {
        return $this->fk_carreraclave;
    }
    /**
     * @param mixed $fk_carreraclave
     */
    public function setFkCarreraclave($fk_carreraclave): void
    {
        $this->fk_carreraclave = $fk_carreraclave;
    }

    /**
     * @return mixed
     */
    public function getFkAsignaturaclave()
    {
        return $this->fk_asignaturaclave;
    }
    /**
     * @param mixed $fk_asignaturaclave
     */
    public function setFkAsignaturaclave($fk_asignaturaclave): void
    {
        $this->fk_asignaturaclave = $fk_asignaturaclave;
    }

    /**
     * @return mixed
     */
    public function getFkGrupoclave()
    {
        return $this->fk_grupoclave;
    }
    /**
     * @param mixed $fk_grupoclave
     */
    public function setFkGrupoclave($fk_grupoclave): void
    {
        $this->fk_grupoclave = $fk_grupoclave;
    }

    /**
     * @return mixed
     */
    public function getAula()
    {
        return $this->aula;
    }
    /**
     * @param mixed $aula
     */
    public function setAula($aula): void
    {
        $this->aula = $aula;
    }

    /**
     * @return mixed
     */
    public function getDialu()
    {
        return $this->dialu;
    }
    /**
     * @param mixed $dialu
     */
    public function setDialu($dialu): void
    {
        $this->dialu = $dialu;
    }

    /**
     * @return mixed
     */
    public function getDiama()
    {
        return $this->diama;
    }
    /**
     * @param mixed $diama
     */
    public function setDiama($diama): void
    {
        $this->diama = $diama;
    }

    /**
     * @return mixed
     */
    public function getDiami()
    {
        return $this->diami;
    }
    /**
     * @param mixed $diami
     */
    public function setDiami($diami): void
    {
        $this->diami = $diami;
    }

    /**
     * @return mixed
     */
    public function getDiaju()
    {
        return $this->diaju;
    }
    /**
     * @param mixed $diaju
     */
    public function setDiaju($diaju): void
    {
        $this->diaju = $diaju;
    }

    /**
     * @return mixed
     */
    public function getDiavi()
    {
        return $this->diavi;
    }
    /**
     * @param mixed $diavi
     */
    public function setDiavi($diavi): void
    {
        $this->diavi = $diavi;
    }

    /**
     * @return mixed
     */
    public function getDiasa()
    {
        return $this->diasa;
    }
    /**
     * @param mixed $diasa
     */
    public function setDiasa($diasa): void
    {
        $this->diasa = $diasa;
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
   
    public function queryconsultaGrupo(){
        $query="SELECT `id`, `fk_carreraclave`, `fk_asignaturaclave`, `fk_grupoclave`, `aula`, `dialu`, `diama`, 
        `diami`, `diaju`, `diavi`, `diasa`, `periodo` FROM `grupo`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateGrupo(){
        $query="UPDATE `grupo` SET `fk_carreraclave`='".$this->getFkCarreraclave()."',`fk_asignaturaclave`='".$this->getFkAsignaturaclave()."',
        `fk_grupoclave`='".$this->getFkGrupoclave()."',`aula`='".$this->getAula()."',`dialu`='".$this->getDialu()."',`diama`='".$this->getDiama()."',
        `diami`='".$this->getDiami()."', `diaju`='".$this->getDiaju()."',`diavi`='".$this->getDiavi()."',`diasa`='".$this->getDiasa()."',
        `periodo`='".$this->getPeriodo()."'
        WHERE `id`='".$this->getId()"'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertGrupo(){
        $query="INSERT into `Grupo`(`id`,`fk_carreraclave`,`fk_asignaturaclave`,`fk_grupoclave`,`aula`,`dialu`, `diama`, `diami`, `diaju`, `diavi`, 
        `diasa`, `periodo`) 
        VALUES ('".$this->getId()."', '".$this->getFkCarreraclave()."','".$this->getFkAsignaturaclave()."','".$this->getFkGrupoclave()."',
        '".$this->getAula()."', '".$this->getDialu()."','".$this->getDiama()."','".$this->getDiami()."','".$this->getDiaju()."','".$this->getDiavi()."',
        '".$this->getDiasa()."','".$this->getPeriodo()."')";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteGrupo(){
        $query="DELETE FROM `grupo` WHERE `id`='".$this->getId()."'";
        $this->connect();
        $resultado= $this->ExecuteQuery($query);
        $this->close();
        return $resultado;
    }
}