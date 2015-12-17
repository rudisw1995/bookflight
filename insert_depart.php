<?php
        include("connect.php");
?>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Depart</title>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
        <script type="text/javascript" src="jquery-1.4.2.js"></script>
        <script type="text/javascript" src="jquery.autocomplete.js"></script>
        <script type="text/javascript">
                $(document).ready(
                        function()
                        {      
                                $("#depart").autocomplete("find_depart.php", {width: 250});
                               
                        });
        </script>
</head>
</html>
