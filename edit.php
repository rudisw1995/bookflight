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
            <?php
                error_reporting(0);
               $stat=$_GET['stat'];
                if($stat==1){
                echo" <div class='alert alert-danger' role='alert'>Kota tujuan dan keberangkatan sama</div>";
                }    
            ?>
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
            
            DEPART
            
            <?php
            $sql4=mysql_query("SELECT * FROM airplane WHERE ID='$id'");
            $array4=mysql_fetch_array($sql4);
            $sql5=mysql_query("SELECT * FROM depart WHERE id_airport='$array4[DEPART]' ");
            $array5=mysql_fetch_array($sql5);
            ?>
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array5['depart']?> "  name="depart"  />
            </div>

        </p>
         
        <p>
            RETURN
            
            <?php
            $sql6=mysql_query("SELECT * FROM depart WHERE id_airport='$array4[RETURN]' ");
            $array6=mysql_fetch_array($sql6);
         ?>
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array6['depart']?> "  name="nama"  />
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
            <input type="date" required disabled class="form-control" value="<?php echo $array4['DEPARTURE_DATE'] ?>"name="departure_date"/>
            </div>
        </p>
         
        
        </p>
            
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