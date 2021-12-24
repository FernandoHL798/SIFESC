<?php
include_once "../control/controlProfesor.php";
$idDepartamento=$_POST['idDepartamento'];
echo consultaProfesorDepartamento($idDepartamento);