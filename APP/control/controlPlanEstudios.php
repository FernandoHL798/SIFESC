<?php

function consultaPlanes(){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    return json_encode($PLAN->queryconsultaPlan());
}

function consultaDatosPlan($idPlan){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    return json_encode($PLAN->queryconsultaDatosPlan($idPlan));
}

function updatePlan($params){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($params['id_plan']);
    $PLAN->setIdCarreraFk($params['id_carrera_fk']);
    $PLAN->setAnioPlan($params['anio_plan']);
    $PLAN->setCreditosObligatorios($params['creditos_ob']);
    $PLAN->setCreditosOptativos($params['creditos_op']);
    $PLAN->setCreditosTotales($params['creditos_t']);
    $PLAN->setSemestres($params['semestres']);
    $PLAN->setMaximoCreditos($params['maximo_creditos']);
    $PLAN->setMinimoCreditos($params['minimo_creditos']);
    $PLAN->setMaximoSemestres($params['maximo_semestres']);
    $PLAN->setMinimoMaterias($params['minimo_materias']);
    //Preguntar a Naye
    $PLAN->setMaximoMaterias($params['maximo_materias']);
    $PLAN->setEstatus("1");
    return $PLAN->queryUpdatePlan($params);
}

function insertPlan($params){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($params['id_plan']);
    $PLAN->setIdCarreraFk($params['id_carrera_fk']);
    $PLAN->setNombrePlan($params['nombre_plan']);
    $PLAN->setAnioPlan($params['anio_plan']);
    $PLAN->setCreditosObligatorios($params['creditos_ob']);
    $PLAN->setCreditosOptativos($params['creditos_op']);
    $PLAN->setCreditosTotales($params['creditos_t']);
    $PLAN->setSemestres($params['semestres']);
    $PLAN->setMaximoCreditos($params['maximo_creditos']);
    $PLAN->setMinimoCreditos($params['minimo_creditos']);
    $PLAN->setMaximoSemestres($params['maximo_semestres']);
    $PLAN->setMinimoMaterias($params['minimo_materias']);
    $PLAN->setMaximoMaterias($params['maximo_materias']);
    $PLAN->setEstatus($params['estatus']);
    return $PLAN->queryInsertPlan();
}

function deletePlan($id_Plan){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($id_Plan);
    return $PLAN->queryDeletePlan();
}

function consultaExisteAsignaturasPlan($idPlan,$codigo){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $result = $PLAN->queryConsultaExisteAsignaturasPlan($idPlan,$codigo);
    if(count($result)>0){
        return json_encode($result);
    }else{
        return false;
    }
}

    function consultaAsignaturasPlan($idPlan){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    return json_encode($PLAN->queryConsultaAsignaturasPlan($idPlan));

}
