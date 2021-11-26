<?php

function genIdUsuario($strength = 10)  {
    $input = '0123456789';
    $input_length = strlen($input);
    $random_string = '';
    $date = date_create();
    $mes=date_format($date,"m");
    $dia=date_format($date,"d");
    $hra=date_format($date,"H");
    $min=date_format($date,"i");
    $sec=date_format($date,"s");
    $random_string= $mes.$dia.$hra.$min.$sec;
    return $random_string;
}