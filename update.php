<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$Id = $_POST['id'];
	$Name = $_POST['nama'];
	$Class = $_POST['class']; #
	#$Return_Date = $_POST['return_date'];
	#$Arrival_Time = $_POST['arrival_time']; #
	
	$sql = "UPDATE `airplane` SET NAME='$Name' ,  CLASS='$Class'  WHERE ID='$Id'";
	// , RETURN='$Return'
	//$sql = "INSERT INTO airplane(ID, NAME, DEPART, RETURN, CLASS, DEPARTURE_DATE, RETURN_DATE, DEPARTURE_TIME, ARRIVAL_TIME) values('$Id','$Name','$Depart','$Return','$Class','$Departure_Date','$Return_Date','$Departure_Time','$Arrival_Time')";
    mysql_query($sql) or die ('Error!!'.mysql_error());
    echo"<script>window.location.href='index.php';</script>";
	exit;
}

header("location:index.php");
?> 
