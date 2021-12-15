<?php 
include_once"../control/controlProfesor.php";
$id_profesor=$_POST['idProfesor'];
$result=deleteProfesor($id_profesor);
echo $result;