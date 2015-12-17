<html>


<h1 align="center">Book List</h1>
<?php
error_reporting(0);
include 'connect.php';
include 'cek-login.php';
?> 
<link href="css/bootstrap.css" rel="stylesheet" media="all">
<body background = "stock-footage--animated-intro-with-airplane-flying-over-clouds.jpg">
<fieldset style="width: 50%; margin: auto;">
    <legend>Book Your Flight Below</legend>
 <?php
    $stat=$_GET['stat'];
    if($stat==1){
        echo" <div class='alert alert-danger' role='alert'>Kota tujuan dan keberangkatan sama</div>";
    }    
    ?>
    <form action="inputtime.php" method="post">
    	<p>
            ID NUMBER

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
            <input type="int" required class="form-control" placeholder="" aria-describedby="sizing-addon1" name="id_pemesan"/>
            </div>
        </p>
         
        <p>
            NAME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" required class="form-control" placeholder="" aria-describedby="sizing-addon1"  name="nama"  />
            </div>
        </p>
        <?php
            $sql=mysql_query("SELECT * FROM depart ");
            $sql2=mysql_query("SELECT * FROM depart ");
        ?>
        <p>
            DEPART
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <form method="post" action="insert_depart.php">
            <select class="form-control" name="depart">
                <?php 
                    while ($array=mysql_fetch_array($sql)){
                 ?>       
                    <option value="<?php echo $array['id_airport'];?>"> <?php echo $array['depart'];?> </option>
                    <?php
                    }
                    ?>
           </select>
            </div>

        </p>
         
        <p>
            RETURN

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
           <select class="form-control" name="return">
                <?php 
                    while ($array2=mysql_fetch_array($sql2)) { 
                ?>
                    <option value="<?php echo $array2['id_airport'];?>"> <?php echo $array2['depart'];?> </option>
                <?php
                    }
                ?>
           </select>
            </div>
        </p>
        	CLASS

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span></span>
            <select class="form-control" name="class">
            <option>ECONOMY</option>
           </select>
            </div>
        </p>
        	DEPARTURE DATE

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input type="date" required class="form-control" placeholder="" aria-describedby="sizing-addon1" name="departure_date"/>
            </div>
        </p>
         
        
        </p>
            
        <p>
            
            <input class="btn btn-default" type="submit" name="submit" value="Submit" />
            <input class="btn btn-default" type="reset" value="Reset" onclick="return confirm('Delete data?')"/>
        </p>
            </form>
</fieldset>


<center>[<a href="index.php">Back to Homepage</a>]</center> 
</html>