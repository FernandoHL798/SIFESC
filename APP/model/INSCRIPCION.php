<?php
include_once "CONEXION.php";
class INSCRIPCION extends CONEXION{
    private $id_inscripcion;
    private $id_usuarioalumno_fk;
    private $id_periodo_fk;
    private $fecha_inscp;
    private $hora_inscp;
    private $fecha_altas_bajas;
    private $hora_altas_bajas;
    private $updated_at;
    private $created_at;

  
    /**
     * @return mixed
     */
    public function getIdInscripcion()
    {
        return $this->id_inscripcion;
    }
    /**
     * @param mixed $id_inscripcion
     */
    public function setIdInscripcion($id_inscripcion): void
    {
        $this->id_inscripcion = $id_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioAlumnoFk()
    {
        return $this->id_usuarioalumno_fk;
    }
    /**
     * @param mixed $id_usuarioalumno_fk
     */
    public function setIdUsuarioAlumnoFk($id_usuarioalumno_fk): void
    {
        $this->id_usuarioalumno_fk = $id_usuarioalumno_fk;
    }

    /**
     * @return mixed
     */
    public function getIdPeriodoFk()
    {
        return $this->id_periodo_fk;
    }
    /**
     * @param mixed $id_periodo_fk
     */
    public function setIdPeriodoFk($id_periodo_fk): void
    {
        $this->id_periodo_fk = $id_periodo_fk;
    }

     /**
     * @return mixed
     */
    public function getFechaInscp()
    {
        return $this->fecha_inscp;
    }
    /**
     * @param mixed $fecha_inscp
     */
    public function setFechaInscp($fecha_inscp): void
    {
        $this->fecha_inscp = $fecha_inscp;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getHoraInscp()
    {
        return $this->hora_inscp;
    }
    /**
     * @param mixed $hora_inscp
     */
    public function setHoraInscp($hora_inscp): void
    {
        $this->hora_inscp = $hora_inscp;
    }
    
     /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getFechaAltasBajas()
    {
        return $this->fecha_altas_bajas;
    }
    /**
     * @param mixed $fecha_altas_bajas
     */
    public function setFechaAltasBajas($fecha_altas_bajas): void
    {
        $this->fecha_altas_bajas = $fecha_altas_bajas;
    }
    
    /**
     * @return mixed
     */
    public function getHoraAltasBajas()
    {
        return $this->hora_altas_bajas;
    }
    /**
     * @param mixed $hora_altas_bajas
     */
    public function setHoraAltasBajas($hora_altas_bajas): void
    {
        $this->hora_altas_bajas = $hora_altas_bajas;
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

    
    public function queryconsultaInscripcion(){
        $query="SELECT `id_inscripcion`, `id_usuarioalumno_fk`, `id_periodo_fk`, `fecha_inscp`, `hora_inscp`, `fecha_altas_bajas`, `hora_altas_bajas`, `updated_at`, `created_at` FROM `inscripcion`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateInscripcion(){
        $query="UPDATE `inscripcion` SET `id_usuarioalumno_fk` = '".$this->getIdUsuarioAlumnoFk()."', `id_periodo_fk` = '".$this->getIdPeriodoFk()."', `fecha_inscp` = '".$this->getFechaInscp()."', `hora_inscp` = '".$this->getHoraInscp()."', `fecha_altas_bajas` = '".$this->getFechaAltasBajas()."', `hora_altas_bajas` = '".$this->getHoraAltasBajas()."', `updated_at` = '".$this->getUpdatedAt()."', `created_at` = '".$this->getCreatedAt()."' WHERE `inscripcion`.`id_inscripcion` = '".$this->getIdInscripcion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertInscripcion(){
        $query="INSERT into `inscripcion`(`id_inscripcion`,`id_usuarioalumno_fk`,`id_periodo_fk`,`fecha_inscp`,`hora_inscp`, `fecha_altas_bajas`, `hora_altas_bajas`,`updated_at`,`created_at`) 
        VALUES ('".$this->getIdInscripcion()."', '".$this->getIdUsuarioAlumnoFk()."', '".$this->getIdPeriodoFk()."', '".$this->getFechaInscp()."', '".$this->getHoraInscp()."', '".$this->getFechaAltasBajas()."', '".$this->getHoraAltasBajas()."', '".$this->getUpdatedAt()."','".$this->getCreatedAt()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryDeleteInscripcion(){
        $query="DELETE FROM `inscripcion` WHERE `id_inscripcion`='".$this->getIdInscripcion()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}