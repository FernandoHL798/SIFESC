<?php
include_once "../control/controlFacultad.php";
$params =[
"id_Facultad" => "1",
"nombre_fac" => "Juana"
];
$result=insertFacultad($params);
echo $result;