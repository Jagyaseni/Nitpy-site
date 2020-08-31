<?php
session_start();
$_SESSION['uid']="";
session_destroy();
header('location:fac_log.php');
?>