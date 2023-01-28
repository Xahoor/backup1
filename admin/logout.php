<?php
ob_start();
session_start();

unset($_SESSION["admin"]);
session_destroy();
header('location: ../alogin.php');

?>