<?php
include_once "CONEXION.php";
class SALON extends CONEXION{
    private $id_salon;
    private $id_edificio_fk;
    private $clave;
    private $updated_at;
    private $created_at;

  
    /**
     * @return mixed
     */
    public function getIdSalon()
    {
        return $this->id_salon;
    }
    /**
     * @param mixed $id_salon
     */
    public function setIdSalon($id_salon): void
    {
        $this->id_salon = $id_salon;
    }

    /**
     * @return mixed
     */
    public function getIdEdificioFk()
    {
        return $this->id_edificio_fk;
    }
    /**
     * @param mixed $id_edificio_fk
     */
    public function setIdEdificioFk($id_edificio_fk): void
    {
        $this->id_edificio_fk = $id_edificio_fk;
    }

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
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    
    public function queryconsultaSalon(){
        $query="SELECT `id_salon`, `id_edificio_fk`, `clave`, `updated_at`, `created_at` FROM `salon`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateSalon(){
        $query="UPDATE `salon` SET `id_edificio_fk` = '".$this->getIdEdificioFk()."', `clave` = '".$this->getClave()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `salon`.`id_salon` = '".$this->getIdSalon()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertSalon(){
        $query="INSERT into `salon`(`id_salon`,`id_edificio_fk`,`clave`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdSalon()."', '".$this->getIdEdificioFk()."', '".$this->getClave()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteSalon(){
        $query="DELETE FROM `salon` WHERE `id_salon`='".$this->getIdSalon()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
