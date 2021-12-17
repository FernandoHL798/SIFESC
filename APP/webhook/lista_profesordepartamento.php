<?php 
include_once "../control/controlProfesordepartamento.php";
$idUsuario=$_POST['idUsuario'];
echo consultaProfesordepartamento($idUsuario);
