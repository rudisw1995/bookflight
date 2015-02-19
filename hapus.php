<?php
include 'connect.php';
	
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `airplane` WHERE ID = '$id'";
	
	mysql_query($sql) or die ('Error!!'.mysql_error());
    echo"<script>window.location.href='index.php';</script>";
	exit;
}
//if (isset($_GET['NAME'])) {
//	//$dbh->exec("DELETE FROM airplane WHERE ID = '$_GET[id]'");
//    $sql = "DELETE FROM `airplane` WHERE ID = '$_GET[NAME]'";
//    mysql_query($sql) or die ('Error!!'.mysql_error());
//	echo"<script>window.location.href='index.php';</script>";
//	exit;
//}
header("location:index.php");
?> 

