<?php
include_once "CONEXION.php";
class ASIGNACION extends CONEXION{
    private $id_asignacion;
    private $id_usuarioprofesor_fk;
    private $id_grupo_fk;
    private $cupo;
    private $updated_at;
    private $created_at;

  
    /**
     * @return mixed
     */
    public function getIdAsignacion()
    {
        return $this->id_asignacion;
    }
    /**
     * @param mixed $id_asignacion
     */
    public function setIdAsignacion($id_asignacion): void
    {
        $this->id_asignacion = $id_asignacion;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioProfesorFk()
    {
        return $this->id_usuarioprofesor_fk;
    }
    /**
     * @param mixed $id_usuarioprofesor_fk
     */
    public function setIdUsuarioProfesorFk($id_usuarioprofesor_fk): void
    {
        $this->id_usuarioprofesor_fk = $id_usuarioprofesor_fk;
    }

      /**
     * @return mixed
     */
    public function getIdGrupoFk()
    {
        return $this->id_grupo_fk;
    }
    /**
     * @param mixed $id_grupo_fk
     */
    public function setIdGrupoFk($id_grupo_fk): void
    {
        $this->id_grupo_fk = $id_grupo_fk;
    }

     /**
     * @return mixed
     */
    public function getCupo()
    {
        return $this->cupo;
    }
    /**
     * @param mixed $cupo
     */
    public function setCupo($cupo): void
    {
        $this->cupo = $cupo;
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

    
    public function queryconsultaAsignacion(){
        $query="SELECT `id_asignacion`, `id_usuarioprofesor_fk`, `id_grupo_fk`, `cupo`, `updated_at`, `created_at` FROM `asignacion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateAsignacion(){
        $query="UPDATE `asignacion` SET `id_usuarioprofesor_fk` = '".$this->getIdUsuarioProfesorFk()."', `id_grupo_fk` = '".$this->getIdGrupoFk()."', `cupo` = '".$this->getCupo()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `asignacion`.`id_asignacion` = '".$this->getIdAsignacion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAsignacion(){
        $query="INSERT into `asignacion`(`id_asignacion`,`id_usuarioprofesor_fk`,`id_grupo_fk`,`cupo`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdAsignacion()."', '".$this->getIdUsuarioProfesorFk()."', '".$this->getIdGrupoFk()."', '".$this->getCupo()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAsignacion(){
        $query="DELETE FROM `asignacion` WHERE `id_asignacion`='".$this->getIdAsignacion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}