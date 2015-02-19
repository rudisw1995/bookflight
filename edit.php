<html>
<link href="css/bootstrap.css" rel="stylesheet" media="all">
<?php
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $sql = "SELECT * FROM airplane WHERE ID = '$id'";
	mysql_query($sql) or die ('Error!!'.mysql_error());
} else {
    echo "Invalid data!
<a href='index.php'>Back to Homepage</a>";
    exit();
}

if (($_GET['id']) === "") {
    echo "Data Not Found!
<a href='index.php'>Back to Homepage</a>";
    exit();
}
?>
<?php
    // $sql = "SELECT * FROM airplane WHERE ID = '$id'";
    $query = mysql_query("SELECT * FROM airplane WHERE ID = '$id'");
    // $no  = 1;
    // foreach ($dbh->query($sql) as $data) :
	while ($row = mysql_fetch_array($query)) {        
    
    ?>
<h1 align="center">Edit Your Flight</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Please Edit Below</legend>
     
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo "$row[ID]";?>" />
        <p>
            ID

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
            <input type="int" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[ID]"; ?>" disabled = "disabled">
            </div>
        </p>
         
        <p>
            NAME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[NAME]"; ?>" name="nama">
            </div>
        </p>
         
        <p>
            DEPART
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[DEPART]"; ?>" name="depart">
            </div>

        </p>
         
        <p>
            RETURN

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[RETURN]"; ?>" name="return">
            </div>
        </p>
            CLASS

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span></span>
            <select class="form-control" name="clas">
            <option>ECONOMY</option>
            <option>BUSINESS</option>
            <option>FIRST</option>
           </select>
            
            

            </div>
        </p>
            DEPARTURE DATE

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input type="date" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[DEPARTURE_DATE]"; ?>" name="departure_date" >
            </div>
        </p>
            RETURN DATE

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input type="date" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[RETURN_DATE]"; ?>" name="return_date">
            </div>
        </p>
         
        
        </p>
            DEPARTURE TIME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <input type="time" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[DEPARTURE_TIME]"; ?>" name="departure_time">
            </div>
        </p>
            ARRIVAL TIME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <input type="time" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="<?php echo "$row[ARRIVAL_TIME]"; ?>" name="arrival_time">
            </div>
        </p>
        <p>
            
            <input class="btn btn-default" type="submit" name="submit" value="Submit" />
            <input class="btn btn-default" type="reset" value="Reset" onclick="return confirm('Delete data?')">
        </p>
    </form>
</fieldset>
<?php
  }
?>


<center><a href="index.php">Back to Homepage <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></center> 
</html>