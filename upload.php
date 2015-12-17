<?php
include 'connect.php';
$id_user=$_POST['id'];
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
    if (move_uploaded_file($file_tmp,"images/".$file_name)) {

        $sql ="INSERT INTO gambar values ('','$id_user','$file_name')";
		mysql_db_query("lalala",$sql);
	//$sql = "INSERT INTO airplane(ID, NAME, DEPART, RETURN, CLASS, DEPARTURE_DATE, RETURN_DATE, DEPARTURE_TIME, ARRIVAL_TIME) values('$Id','$Name','$Depart','$Return','$Class','$Departure_Date','$Return_Date','$Departure_Time','$Arrival_Time')";    	
        header('location:kuitansi.php?id='.$id_user);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

?>