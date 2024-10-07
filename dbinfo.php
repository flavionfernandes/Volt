<?php
//database connection info
//$host="mysql11.000webhost.com";
//$user="a4517500_flavion";
//$password="honvic007";
//$db=mysql_connect($host, $user, $password) or
//die(mysql_error());
//mysql_select_db("a4517500_Logins",$db);




<?php
   
   $dbhost = 'mysql11.000webhost.com';
   $dbuser = 'a4517500_flavion';
   $dbpass = 'honvic007';
   $conn = mysql_connect("$dbhost", "$dbuser", "$dbpass");
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_close($conn);
?>