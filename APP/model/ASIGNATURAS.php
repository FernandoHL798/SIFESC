<?php
include_once "CONEXION.php";
class FACULTAD extends CONEXION{
    private $id_asignatura;
    private $id_plan_fk;
    private $codigo;
    private $nombre;
    private $creditos;
    private $antecesor;
    private $sucesor;
    private $caracter;
    private $semestre;
    private $updated_at;
    private $created_at;

  
    /**
     * @return mixed
     */
    public function getIdAsignatura()
    {
        return $this->id_asignatura;
    }
    /**
     * @param mixed $id_asignatura
     */
    public function setIdAsignatura($id_asignatura): void
    {
        $this->id_asignatura = $id_asignatura;
    }

    /**
     * @return mixed
     */
    public function getIdPlanFk()
    {
        return $this->id_plan_fk;
    }
    /**
     * @param mixed $id_plan_fk
     */
    public function setIdPlanFk($id_plan_fk): void
    {
        $this->id_plan_fk = $id_plan_fk;
    }

      /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
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
    public function getCreditos()
    {
        return $this->creditos;
    }
    /**
     * @param mixed $creditos
     */
    public function setCreditos($creditos): void
    {
        $this->creditos = $creditos;
    }

    /**
     * @return mixed
     */
    public function getAntecesor()
    {
        return $this->antecesor;
    }
    /**
     * @param mixed $antecesor
     */
    public function setAntecesor($antecesor): void
    {
        $this->antecesor = $antecesor;
    }

    public function getSucesor()
    {
        return $this->sucesor;
    }
    /**
     * @param mixed $sucesor
     */
    public function setSucesor($sucesor): void
    {
        $this->sucesor = $sucesor;
    }

    public function getCaracter()
    {
        return $this->caracter;
    }
    /**
     * @param mixed $caracter
     */
    public function setCaracter($caracter): void
    {
        $this->caracter = $caracter;
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
    public function setSemestres($semestre): void
    {
        $this->semestre = $semestre;
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

    
    public function queryconsultaAsignaturas(){
        $query="SELECT `id_asignatura`, `id_plan_fk`, `codigo`, `nombre`, `creditos`, `antecesor`, `sucesor`, `caracter`, `semestre`,`updated_at`, `created_at` FROM `asignaturas`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateAsignaturas(){
        $query="UPDATE `asignaturas` SET `id_plan_fk` = '".$this->getIdPlanFk()."', `codigo` = '".$this->getCodigo()."', `nombre` = '".$this->getNombre()."', `creditos` = '".$this->getCreditos()."', `antecesor` = '".$this->getAntecesor()."', `sucesor` = '".$this->getSucesor()."', `caracter` = '".$this->getCaracter()."', `semestre` = '".$this->getSemestre()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `asignaturas`.`id_asignatura` = '".$this->getIdAsignatura()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAsignaturas(){
        $query="INSERT into `asignaturas`(`id_asignatura`,`id_plan_fk`,`codigo`,`nombre`,`creditos`,`antecesor`,`sucesor`,`caracter`,`semestre`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdAsignatura()."', '".$this->getIdPlanFk()."', '".$this->getCodigo()."', '".$this->getNombre()."', '".$this->getCreditos()."', '".$this->getAntecesor()."', '".$this->getSucesor()."', '".$this->getCaracter()."', '".$this->getSemestre()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAsignaturas(){
        $query="DELETE FROM `asignaturas` WHERE `id_asignatura`='".$this->getIdAsignaturas()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}