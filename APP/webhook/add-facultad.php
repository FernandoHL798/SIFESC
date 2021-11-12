<?php
$params =[
"id_Facultad" => "1",
"nombre_fac" => "Juana"
];
include_once "../control/controlFacultad.php";
echo insertFacultad($params);