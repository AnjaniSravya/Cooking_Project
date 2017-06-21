<?php
session_start();

define('DB_HOST', 'localhost');

define('DB_UNAME', 'root');

define('DB_PASSWORD', 'root');

define('DB_NAME', 'sudha');


$conne = mysqli_connect(DB_HOST, DB_UNAME, DB_PASSWORD, DB_NAME);


function session_set()
{
    if(empty($_SESSION['e'])){
     header('Location: admin.php');
    }
}
?>
