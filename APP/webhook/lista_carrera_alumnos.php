<?php 
include_once"../control/controlCarrera.php";
$idUsuario=$_POST['idUsuario'];
$result=consultaCarreraAlumnos($idUsuario);
echo $result;