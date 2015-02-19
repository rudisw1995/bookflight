<!DOCTYPE HTML>

<html>
	<head>
		<title>TUGAS SG</title>
		<link href = "css/bootstrap.css" rel ="stylesheet" media="all"> 
		<link href = "css/style.css" rel ="stylesheet" media="all"> 
	</head>
<body>
	 <br><br>
<div class="container">
<div class="jumbotron">

  <center><h1>WELCOME TO AIRRUDI</h1></center>
   <center><p>We Offered the Safest Flight in the World</p></center>
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
      <a class="navbar-brand" href="#">Book Your Flight Below</a>
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
            <td>ID</td>
            <td>NAME</td>
            <td>DEPART</td>
            <td>RETURN</td>
            <td>CLASS</td>
            <td>DEPARTURE DATE</td>
            <td>RETURN DATE</td>
            <td>DEPARTURE TIME</td>
            <td>ARRIVAL TIME</td>
            <td>EDIT</td>
        </tr>
    </thead>
     
    <tbody>
    <?php
    // $sql = "SELECT * FROM airplane ORDER BY DEPARTURE_DATE";
    $query = mysql_query("SELECT * FROM airplane");
    // $no  = 1;
    // foreach ($dbh->query($sql) as $data) :
    while ($row = mysql_fetch_array($query)) {
        
    
    ?>
        <tr>
            <!-- <td><?php //echo $no++;?> </td> -->
			<?php
            echo "<td>$row[ID]</td>";
            echo "<td>$row[NAME]</td>";
            echo "<td>$row[DEPART]</td>";
            echo "<td>$row[RETURN]</td>";
            echo "<td>$row[CLASS]</td>"; 
            echo "<td>$row[DEPARTURE_DATE]</td>";
            echo "<td>$row[RETURN_DATE]</td>";
            echo "<td>$row[DEPARTURE_TIME]</td>";
            echo "<td>$row[ARRIVAL_TIME]</td>";
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
