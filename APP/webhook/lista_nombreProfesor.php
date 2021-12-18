<?php 
include_once "../control/controlProfesor.php";
$idProfesor=$_POST['idProfesor'];
echo consultaNombreProfesor($idProfesor);