<?php
include('connect.php');

session_start();

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['pass'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}

	$query = mysql_query("SELECT * FROM akun WHERE USERNAME='$username' AND PASSWORD='$password' ");
    // $no  = 1;
    // foreach ($dbh->query($sql) as $data) :
    if($row = mysql_fetch_array($query)) {
    		$_SESSION['username'] = $username;
    		header('location:index.php');    
    }else{
    	header('location:login.php?error=4');
    }
// if ($username == $_POST['username'] && $password == $_POST['pass']) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
//	$_SESSION['username'] = $username;
	
	//redirect ke halaman index
//	header('location:index.php');
//} else {
	//kalau username ataupun password tidak terdaftar di database
//	header('location:login.php?error=4');
    
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['pass']);
	
	$sql = "INSERT INTO `akun` (`USERNAME`,`PASSWORD`) values('$username','$password')";
    mysql_query($sql) or die ('Error!!'.mysql_error());
    echo"<script>window.location.href='index.php';</script>";
	exit;
}

header("location:index.php");
?> 
//}
?>