<?php
include_once "conne.php";
session_set();
if(isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$sql = "DELETE FROM `newentry` WHERE `id` = '".$id."'";
	$data = mysqli_query($conne, $sql);
	$row = mysqli_fetch_array($data);
	if($data) {
		header('Location:index.php');
	}
	else {
		echo "not";
	}
}
?>
