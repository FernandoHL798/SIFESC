<?php
include_once "../control/controlGrupos.php";
$idAsignatura =$_POST['idAsignatura'];
echo consultaGpoAsignatura($idAsignatura);