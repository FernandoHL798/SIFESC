<?php
include_once "CONEXION.php";
class GRUPOS extends CONEXION{
    private $id_grupo;
    private $id_asignatura_fk;
    private $nombre_grupo;

  
    /**
     * @return mixed
     */
    public function getIdGrupo()
    {
        return $this->id_grupo;
    }
    /**
     * @param mixed $id_grupo
     */
    public function setIdGrupo($id_grupo): void
    {
        $this->id_grupo = $id_grupo;
    }

    /**
     * @return mixed
     */
    public function getIdAsignaturaFk()
    {
        return $this->id_asignatura_fk;
    }
    /**
     * @param mixed $id_asignatura_fk
     */
    public function setIdAsignaturaFk($id_asignatura_fk): void
    {
        $this->id_asignatura_fk = $id_asignatura_fk;
    }

     /**
     * @return mixed
     */
    public function getNombreGrupo()
    {
        return $this->nombre_grupo;
    }
    /**
     * @param mixed $nombre_grupo
     */
    public function setNombreGrupo($nombre_grupo): void
    {
        $this->nombre_grupo = $nombre_grupo;
    }

    
    public function queryconsultaGrupos(){
        $query="SELECT `id_grupo`, `id_asignatura_fk`, `nombre_grupo`, `updated_at`, `created_at` FROM `grupos`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateGrupos(){
        $query="UPDATE `grupos` SET `id_asignatura_fk` = '".$this->getIdAsignaturaFk()."', 
        `nombre_grupo` = '".$this->getNombreGrupo()."', `updated_at` = current_timestamp() WHERE `grupos`.`id_grupo` = '".$this->getIdGrupo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertGrupos(){
        $query="INSERT into `grupos`(`id_grupo`,`id_asignatura_fk`,`nombre_grupo`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdGrupo()."', '".$this->getIdAsignaturaFk()."', '".$this->getNombreGrupo()."', 
        current_timestamp(),current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteGrupos(){
        $query="DELETE FROM `grupos` WHERE `id_grupo`='".$this->getIdGrupo()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}
