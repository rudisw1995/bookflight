<html>


<h1 align="center">Book List</h1>
<?php
include 'connect.php';
include 'cek-login.php';
$id=$_GET['id'];
?> 
<link href="css/bootstrap.css" rel="stylesheet" media="all">
<body background = "stock-footage--animated-intro-with-airplane-flying-over-clouds.jpg">
<fieldset style="width: 50%; margin: auto;">
    <legend>Book Your Flight Below</legend>
    <?php
            $sql=mysql_query("SELECT * FROM airplane WHERE id='$id' ");
            $array3=mysql_fetch_array($sql);
         ?>
     
    
    	<p>
            ID NUMBER

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
            <input type="int" disabled class="form-control" value="<?php echo $array3['ID']?> "name="id_pemesan"/>
            </div>
        </p>
         
        <p>
            NAME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array3['NAME']?> "  name="nama"  />
            </div>
        </p>
        
        <p>
            DEPART
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array3['DEPART']?> "  name="depart"  />
            </div>

        </p>
         
        <p>
            RETURN

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array3['RETURN']?> "  name="nama"  />
            </div>
        </p>
        	CLASS

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array3['CLASS']?> "  name="clas"  />
            </div>
        </p>
        	DEPARTURE DATE

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array3['DEPARTURE_DATE']?> "  name="departure_date"  />
            </div>
        </p>
            <?php
            $sql2=mysql_query("SELECT * FROM jam WHERE id = '$array3[ID_JAM]'");
            $array4=mysql_fetch_array($sql2);
            ?>
    
            TIME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <input type="text" disabled class="form-control" value="<?php echo $array4['departure_time']?>-<?php echo $array4['arrival_time']?> "name="time"  />
            
            </div>

            PRICE

            <div class="input-group">
           <span class="input-group-addon">$</span>
            <input type="text" disabled class="form-control" value="<?php echo $array3['PRICE']?> "  name="harga"  />
            </div>        
        
        </p>
            
        <p>
            
        </p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        
            UPLOAD RECEIPT 
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <input type="file" class="form-control" name="file"/>
            
            </div>
            <input type="hidden" class="form-control" name="id" value="<?php echo$id ?>"/>
            <input class="btn btn-default" type="submit" name="submit" value="Submit" />
            <input class="btn btn-default" type="reset" value="Reset" onclick="return confirm('Delete data?')"/>
            
            </form>
</fieldset>


<center>[<a href="index.php">Back to Homepage</a>]</center> 
</html>