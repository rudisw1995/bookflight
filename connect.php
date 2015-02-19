<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "lalala";
$db = mysql_connect("$servername", "$username", "$password") or die ("I cannot connect to the database because: " . mysql_error()); //membuat koneksi ke mysql
mysql_select_db("$databasename", $db) or die ("I cannot select the database '$databasename' because: " . mysql_error()); //memanggil nama databasenya


?>