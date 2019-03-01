<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "impalku";
   $db = new PDO('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>
