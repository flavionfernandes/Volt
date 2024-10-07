<?php
   
   $dbhost = 'mysql11.000webhost.com';
   $dbuser = 'a4517500_flavion';
   $dbpass = 'honvic007';

   
   
   $conn = mysql_connect("$dbhost", "$dbuser", "$dbpass")
		or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";
  
?>


