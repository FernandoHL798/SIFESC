<?php
include_once "CONEXION.php";
class ASIGNATURA extends CONEXION{
    private $id_asignatura;
    private $id_plan_fk;
    private $codigo;
    private $nombre;
    private $creditos;
    private $antecesor;
    private $sucesor;
    private $caracter;
    private $semestre;

  
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
    public function setSemestre($semestre): void
    {
        $this->semestre = $semestre;
    }
    
    public function queryconsultaAsignaturas($id_plan){
        $query="SELECT `id_asignatura`, `codigo`, `nombre`, `creditos`, `antecesor`, `sucesor`, `caracter`, `semestre` FROM `asignaturas` where `id_plan_fk`=".$id_plan;
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateAsignaturas(){
        $query="UPDATE `asignaturas` SET `codigo` = '".$this->getCodigo()."', `nombre` = '".$this->getNombre()."',
         `creditos` = '".$this->getCreditos()."', `antecesor` = '".$this->getAntecesor()."', 
         `sucesor` = '".$this->getSucesor()."', `caracter` = '".$this->getCaracter()."',
          `semestre` = '".$this->getSemestre()."', `updated_at` = current_timestamp() WHERE `asignaturas`.`id_asignatura` = '".$this->getIdAsignatura()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertAsignaturas(){
        $query="INSERT into `asignaturas`(`id_asignatura`,`id_plan_fk`,`codigo`,`nombre`,`creditos`,`antecesor`,`sucesor`,`caracter`,`semestre`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdAsignatura()."', '".$this->getIdPlanFk()."', '".$this->getCodigo()."', 
        '".$this->getNombre()."', '".$this->getCreditos()."', '".$this->getAntecesor()."', 
        '".$this->getSucesor()."', '".$this->getCaracter()."', '".$this->getSemestre()."', 
        current_timestamp(), current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteAsignaturas(){
        $query="DELETE FROM `asignaturas` WHERE `id_asignatura`='".$this->getIdAsignatura()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}