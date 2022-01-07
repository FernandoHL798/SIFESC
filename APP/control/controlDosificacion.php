<?php

function consultaDosificacion(){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    return json_encode($DOSIFICACION->queryconsultaDosificacion());
}

function updateDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFICACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFICACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFICACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFICACION->queryUpdateDosificacion();
}

function insertDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFICACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFICACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFICACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFICACION->queryInsertDosificacion();
}

function deleteDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    return $DOSIFICACION->queryDeleteDosificacion();
}

function consultaDosificacionPeriodo($idUsuario,$idPeriodo,$idCarrera){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    //Verificamos que exista la dosificacion con el ultimo periodo
    $obj_dosificacion= $DOSIFICACION->queryconsultaDosificacionPeriodo($idUsuario,$idPeriodo);
    //Si existe, retornará ese mismo valor que esta en la DB
    if(count($obj_dosificacion)>0){
        return json_encode($obj_dosificacion);
    } else{
        //Algoritmo para fecha de inscripcion por motivo de periodo
        //Sino, generaremos la dosificacion con los seteos para la dosificacion 
        //Generar el algoritmo para la fecha y hora de inscripcion
        /*Por carrera
        Consultamos todas las carreras y con un for vamos creando una fecha dependiendo de la cantidad de carreras que existan
        */
        include_once "../model/CARRERA.php";
        $CARRERA = new CARRERA();
        //Consultamos todas las carreras
        $totalCarreras= count($CARRERA->queryConsultaListaCarreras());
        //COnsultamos el periodo para la fecha de inscripcion de inicio 
        include_once "../model/PERIODO.php";
        $PERIODO= new PERIODO();
        $obj_periodo= $PERIODO->queryConsultaPeriodoUltimo();
        //Seteamos el idUsuario de la dosificacion y el periodo
        $DOSIFICACION->setIdUsuarioAlumnoFk($idUsuario);
        $DOSIFICACION->setIdPeriodoFk($idPeriodo);
        //Obtenemos la fecha del ultimo periodo para poder realizar las fechas por carrera 
        $fechaDosificacionInicio= $obj_dosificacion[0]['fecha_inscripcion_inicio'];
        $fechaDosificacionFin= $obj_dosificacion[0]['fecha_inscripcion_fin'];
        //Realizamos el for ya mencionado para comenzar a  aumentar las fechas por carrera
        foreach($totalCarreras as $carrera){

        }
        for($i=0; $i<$totalCarreras};$i++){
            //creamos las fechas de inscripcion por carrera
            //Se ocupa el id de la carrera que esta estudiando el alumno dependiendo de el plan de estudios que esta metiendo para poder setar su fecha
            // por carrera recorriendo todas las carreras (Mande mensaje a NAY)
            $arrayFechas[$i]= 0;
            $DOSIFICACION->setFechaInscripcion();
            $DOSIFICACION->setHoraInscripcion();
        }
        //Agregamos la dosificacion
        $result= $DOSIFICACION->queryInsertDosificacion();
        //Si la agregacion fue correcta, retornamos la informacion
        if($result){
            /*******************************
             S E    F R E N A   H A S T A   R E S O L V E R     L O     A N T E R I O R
             ******************************/
            /*//Generamos la inscripcion como pidió Naye
            include_once "controlInscripcion.php";
            //generamos los parametros para la inscripcion
            $params =[
                "id_usuarioalumno_fk"=>$idUsuario,
                "id_periodo_fk"=>$idPeriodo,
                ""=>"",
            ];
            
            $obj_dosificacion= $DOSIFICACION->queryconsultaDosificacionPeriodo($idUsuario,$idPeriodo);
            return json_encode($obj_dosificacion);
            */
        }
        //Sino, no hacemos nada, es un error de programacion o de datos en la DB 

    }
}