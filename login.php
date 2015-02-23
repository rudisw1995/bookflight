<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>

<html>
<head>
<title>LOGIN</title>
<link href="css/bootstrap.css" rel="stylesheet" media="all">
</head>
<body background="o-AIRPLANE-facebook.jpg">

<body>
<center><font color = "white" size = "32">LOGIN</font></center>
<div class="container">

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username and Password have not been filled!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username have not been filled!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password have not been filled!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username and Password have not been registered!</h3>';
	}
}
?>

<form action="authentication.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
	<p>
            USERNAME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="username"/>
            </div>
        </p>
	<p>
            PASSWORD

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
            <input type="password" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="pass"/>
            </div>
        </p>
	<tr align="center">
    	<td colspan="3"><input type="submit" name="login" value="Login" /></td>
        <center>[<a href="sign-up.php">SIGN UP </a><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>]</center>

    </tr>
</table>
</form>
</body>
</html>