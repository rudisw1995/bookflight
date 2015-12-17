<?php 
    include('cek-login.php');
?>


<html>
	<head>
		<title>TUGAS SP2</title>
		<link href = "css/bootstrap.css" rel ="stylesheet" media="all"> 
		<link href = "css/style.css" rel ="stylesheet" media="all"> 
	   
  </head>


<body>
	 
<div class="header">
  <div class="menu">
     <ul>
       <li><a href="information.php">FLIGHT SCHEDULE</li>
       <li><a href="input.php">BOOKING</a></li>
     </ul>
  </div>
  <div class="akun">
  <a>
  <?php 
    if (!empty($_GET['message']) && $_GET['message'] == 'success') {
       echo '<h3>Data Successfully added!</h3>';
    }
    echo "".$_SESSION['username']."";
  ?>
</a>
  <a href="logout.php">Logout</a>
  </div>

</div>

<div class="container">
<div class="jumbotron">

  <center><h1>WELCOME TO WISELY AIR</h1></center>
   <center><p>We Offered the Cheapest Flight</p></center>
   <center><img src ="21976406-Charming-Stewardess-Holding-Airplane-In-Hand--Stock-Photo-stewardess-flight-air.jpg" width="200 pixel" height="200" length="200"></center>

</div>

</div>
<?php
include 'connect.php';
?>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Booking List</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        </div>
      </form>
     
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
		<center>[<a href="input.php">Book Here </a><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>]</center>
		 
 <br>
<div class="navv">
<table class="table table-hover" border="1" >
    <thead>
        <tr bgcolor="#abacac">
            <td>ID NUMBER</td>
            <td>NAME</td>
            <td>DEPART</td>
            <td>RETURN</td>
            <td>CLASS</td>
            <td>DEPARTURE DATE</td>
            <td>PRICE</td>
            <td>EDIT</td>
        </tr>
    </thead>
     
    <tbody>
    <?php
    $user = $_SESSION['username'];
    // $sql = "SELECT * FROM airplane where NAME=ORDER BY DEPARTURE_DATE";
    $query = mysql_query("SELECT * FROM airplane where NAME LIKE '%$user%'");
    // $no  = 1;
    // foreach ($dbh->query($sql) as $data) :
    while ($row = mysql_fetch_array($query)) {
        
    
    ?>
        <tr>
            <!-- <td><?php //echo $no++;?> </td> -->
			<?php
            echo "<td>$row[ID]</td>";
            echo "<td>$row[NAME]</td>";
              $sql_depart=mysql_query("SELECT *FROM depart WHERE id_airport='$row[DEPART]'");
              $array_depart=mysql_fetch_array($sql_depart);
            echo "<td>$array_depart[depart]</td>";
              $sql_arrive=mysql_query("SELECT *FROM depart WHERE id_airport='$row[RETURN]'");
              $array_arrive=mysql_fetch_array($sql_arrive);
            echo "<td>$array_arrive[depart]</td>";
            echo "<td>$row[CLASS]</td>"; 
            echo "<td>$row[DEPARTURE_DATE]</td>";
            echo "<td>$row[PRICE]</td>";
            #$sql_departure_time=mysql_query("SELECT *FROM jam WHERE id='$row[DEPARTURE_TIME]'");
            #  $array_departure_time=mysql_fetch_array($sql_departure_time);
            #echo "<td>$array_departure_time[departure_time] - $array_departure_time[arrival_time]</td>";
            ?>
			<td align="center">
                <a href="edit.php?id=<?php echo "$row[ID]";?>">Edit |</a>
                <a href="hapus.php?id=<?php echo "$row[ID]";?> <!--onclick="return confirm('Do You Want to Delete?')" -->Delete</a>
            </td>
			
        </tr>
    <?php
    // endforeach;
    // $no++;
    }
    ?>
    </tbody>
</table>
</div>

<div class="footer">
<div class="container2">
  <text>© Project 2015</text>
</div>
</body> 
</html>
