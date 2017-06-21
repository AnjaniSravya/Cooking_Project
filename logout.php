<?php
include_once "conne.php";

$_SESSION = array();
session_destroy();
header('Location: admin.php');
?>
