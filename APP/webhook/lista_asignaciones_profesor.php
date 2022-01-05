<?php
include_once "../control/controlAsignacion.php";
$idProfesor=$_POST['idProfesor'];
echo consultaAsignacionesProfesor($idProfesor);