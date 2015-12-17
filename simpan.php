<?php
include 'connect.php';
	$Id = $_POST['Id'];
	$Name = $_POST['Name'];
	$Depart = $_POST['depart_somewhere'];
	$Return = $_POST['arrive_somewhere'];
	$Class = $_POST['Class'];
	$Departure_Date = $_POST['departure_date'];
	$id_harga=$_POST['id_harga'];
	$time=$_POST['time'];
	#$Departure_Time = $_POST['departure_time'];
	$sql = "INSERT INTO `airplane` (`ID` ,`NAME` ,`DEPART` ,`RETURN` ,`CLASS` ,`DEPARTURE_DATE`,`PRICE`,`ID_JAM`) values('$Id','$Name','$Depart','$Return','$Class','$Departure_Date','$id_harga','$time')";
	//$sql = "INSERT INTO airplane(ID, NAME, DEPART, RETURN, CLASS, DEPARTURE_DATE, RETURN_DATE, DEPARTURE_TIME, ARRIVAL_TIME) values('$Id','$Name','$Depart','$Return','$Class','$Departure_Date','$Return_Date','$Departure_Time','$Arrival_Time')";
    mysql_query($sql);
header('location:konfirmasi.php?id='.$Id);
?> 
