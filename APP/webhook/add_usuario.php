<?php 
include_once"../control/controlUsuario.php";
$cuentaAdmi="GFUNJNK1651351";
$cuentaAlumn="315578885";
$cuentaProf="GFUNJNK1651351";
$nombre="manuel";
$app="romero";
$apm="martinez";
$correo="manuelrm@gmail.com";
$pwd="1234";
$telefono="5548596215"
var_dump(insertUsuario($cuentaAdmi,$cuentaAlumn,$cuentaProf,$nombre,$app,$apm,$correo,$pwd,$telefono));