
<html>

<h1 align="center">Book List</h1>
<?php
include 'connect.php';
include 'cek-login.php';
    $Id = $_POST['id_pemesan'];
    $Name = $_POST['nama'];
    $depart_somewhere = $_POST['depart'];
    $arrive_somewhere = $_POST['return'];
        if($depart_somewhere==$arrive_somewhere){
        header('location:input.php?id='.$Id.'&stat=1');
        };
    $Class = $_POST['class'];
    $Departure_Date = $_POST['departure_date'];
?> 

<link href="css/bootstrap.css" rel="stylesheet" media="all">
<body background = "stock-footage--animated-intro-with-airplane-flying-over-clouds.jpg">
<fieldset style="width: 50%; margin: auto;">
    <legend>Book Your Flight Below</legend>

     <?php
            $sql=mysql_query("SELECT * FROM jam WHERE depart = '$depart_somewhere' AND arrive = '$arrive_somewhere'");
            $sql90=mysql_query("SELECT * FROM airplane WHERE DEPART = '$depart_somewhere'");
        ?>
    <form action="simpan.php" method="post">
        <p>
            TIME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <select class="form-control" name="time">
                <?php 
                    while ($array=mysql_fetch_array($sql)){
                 ?>       
                    <option value="<?php echo $array['id'];?>"> <?php echo $array['departure_time'];?> - <?php echo $array['arrival_time'];?></option>
                    <?php
                    }
                    ?>
           </select>
                <?php
            $sql2=mysql_query("SELECT * FROM harga WHERE id_depart = '$depart_somewhere' AND id_return = '$arrive_somewhere'");
            $array2=mysql_fetch_array($sql2);
            ?>
            </div>

            PRICE

            <div class="input-group">
           <span class="input-group-addon">$</span>
           <input type="text" class="form-control" disabled name="id_harga2" value="<?php echo $array2['harga'];?>">
            <input type="hidden" class="form-control" name="id_harga" value="<?php echo $array2['harga'];?>">
            </div>
        </p>
            
        </p>
          <p>
    <input class="btn btn-default" type="hidden" name="Id" value="<?php echo $Id?>" />
    <input class="btn btn-default" type="hidden" name="Name" value="<?php echo $Name?>" />
    <input class="btn btn-default" type="hidden" name="depart_somewhere" value="<?php echo $depart_somewhere?>" />
    <input class="btn btn-default" type="hidden" name="arrive_somewhere" value="<?php echo $arrive_somewhere?>" />
    <input class="btn btn-default" type="hidden" name="Class" value="<?php echo $Class?>" />
    <input class="btn btn-default" type="hidden" name="departure_date" value="<?php echo $Departure_Date?>" />
            <input class="btn btn-default" type="submit" name="submit" value="Submit" />
            <input class="btn btn-default" type="reset" value="Reset" onclick="return confirm('Delete data?')"/>
        </p>
            </form>
</fieldset>


<center>[<a href="index.php">Back to Homepage</a>]</center> 
</html>