<?php
include("connect.php");
 
$q = strtolower($_GET["q"]);
if (!$q) return;
 
        $query = mysql_query("select depart from depart where depart LIKE '%$q%'");
        while($r = mysql_fetch_array($query))
        {
                $list_depart = $r['depart'];
                echo "$list_depart \n";
        }
?>