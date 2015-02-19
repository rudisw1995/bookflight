<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$Id = $_POST['id'];
	$Name = $_POST['nama'];
	$Depart = $_POST['depart'];
	$Return = $_POST['return'];
	$Class = $_POST['clas'];
	$Departure_Date = $_POST['departure_date'];
	$Return_Date = $_POST['return_date'];
	$Departure_Time = $_POST['departure_time'];
	$Arrival_Time = $_POST['arrival_time'];
	
	$sql = "UPDATE `airplane` SET NAME='$Name' , DEPART='$Depart' , `RETURN`='$Return' ,  CLASS='$Class' , DEPARTURE_DATE='$Departure_Date' , RETURN_DATE='$Return_Date' , DEPARTURE_TIME='$Departure_Time' , ARRIVAL_TIME='$Arrival_Time' WHERE ID='$Id'";
	// , RETURN='$Return'
	//$sql = "INSERT INTO airplane(ID, NAME, DEPART, RETURN, CLASS, DEPARTURE_DATE, RETURN_DATE, DEPARTURE_TIME, ARRIVAL_TIME) values('$Id','$Name','$Depart','$Return','$Class','$Departure_Date','$Return_Date','$Departure_Time','$Arrival_Time')";
    mysql_query($sql) or die ('Error!!'.mysql_error());
    echo"<script>window.location.href='index.php';</script>";
	exit;
}

header("location:index.php");
?> 
