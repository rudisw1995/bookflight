<h1 align="center">Book List</h1>
<?php
include 'connect.php';
?> 
<link href="css/bootstrap.css" rel="stylesheet" media="all">
<body background = "stock-footage--animated-intro-with-airplane-flying-over-clouds.jpg">
<fieldset style="width: 50%; margin: auto;">
    <legend>Book Your Flight Below</legend>
     
    <form action="simpan.php" method="post">
    	<p>
            ID

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></span>
            <input type="int" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="id_pemesan"/>
            </div>
        </p>
         
        <p>
            NAME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="nama"/>
            </div>
        </p>
         
        <p>
            DEPART
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="depart"/>
            </div>

        </p>
         
        <p>
            RETURN

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="return"/>
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
            <input type="date" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="departure_date"/>
            </div>
        </p>
        	RETURN DATE

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input type="date" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="return_date"/>
            </div>
        </p>
         
        
        </p>
            DEPARTURE TIME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <input type="time" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="departure_time"/>
            </div>
        </p>
            ARRIVAL TIME

            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            <input type="time" class="form-control" placeholder="" aria-describedby="sizing-addon1" name="arrival_time"/>
            </div>
        </p>
        <p>
            
            <input class="btn btn-default" type="submit" name="submit" value="Submit" />
            <input class="btn btn-default" type="reset" value="Reset" onclick="return confirm('Delete data?')"/>
        </p>
            </form>
</fieldset>


<center>[<a href="index.php">Back to Homepage</a>]</center> 
