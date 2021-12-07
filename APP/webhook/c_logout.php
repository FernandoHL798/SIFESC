<?php
session_start();
session_unset();
//var_dump(session_status() == PHP_SESSION_ACTIVE);
$_SESSION = array();
session_destroy();
echo "<script>location.href ='../../';</script>";
?>