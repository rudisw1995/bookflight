<html>
<?php
include "connect.php";
    $sql2=mysql_query("SELECT * FROM jam ");
    $array4=mysql_fetch_array($sql2);
?>
<div class="navv">
<table class="table table-hover" border="1" >
    <thead>
        <tr bgcolor="#abacac">
            <td>DEPART</td>
            <td>RETURN</td>
            <td>TIME</td>
            <td>PRICE</td>
        </tr>
    </thead>
     
    <tbody>
        <?php
            while($array4=mysql_fetch_array($sql2)){
                $sql_depart=mysql_query("SELECT * FROM depart WHERE id_airport='$array4[depart]'");
                $ambil_depart=mysql_fetch_array($sql_depart);
                $sql_arrive=mysql_query("SELECT * FROM depart WHERE id_airport='$array4[arrive]'");
                $ambil_arrive=mysql_fetch_array($sql_arrive);
                $sql_harga=mysql_query("SELECT * FROM harga WHERE id_depart='$array4[depart]' AND id_return='$array4[arrive]'");
                $ambil_harga=mysql_fetch_array($sql_harga);
        ?>
            <tr>
            <td><?php echo $ambil_depart['depart'] ?></td>
            <td><?php echo $ambil_arrive['depart'] ?></td>
            <td><?php echo $array4['departure_time'] ?>-<?php echo $array4['arrival_time'] ?></td>
            <td><?php echo $ambil_harga['harga'] ?></td>
            </tr>
        <?php 
            } 
    ?>
    </tbody>
  </table>
  </div>
  <center>[<a href="index.php">Back to Homepage</a>]</center>  
</html>

 