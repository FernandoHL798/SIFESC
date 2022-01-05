<?php
include_once "../control/controlEstudia.php";
$idPlan= $_POST['idPlan'];
$idCarrera= $_POST['idCarrera'];
echo updatePlanAlumno($idPlan,$idCarrera);