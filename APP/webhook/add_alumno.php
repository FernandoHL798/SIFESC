<?php 
include_once"../control/controlAlumno.php";
$numcuenta="165165154";
$nombre="Paco";
$app="Morales";
$apm="Juarez";
$fecha_nacimiento="2000-12-15";
$correo="paquito@gmail.com";
$pwd="paco123";
$pregunta="??";
$respuesta="1234";
var_dump(insertarAlumno($numcuenta,$nombre,$app,$apm,$fecha_nacimiento,$correo,$pwd,$pregunta,$respuesta));