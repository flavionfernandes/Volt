<!DOCTYPE html>

<html>

	<head>
		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstradp.css">
		<link rel="stylesheet" type="text/css" href="index.css">
		<script src="index.js" type="text/javascript"></script>
		<title>Login</title>
	</head> 

  <body>
  	<div class="nav">
  		<div class="container">
  			<div class="image">
  				<img src="images/vault2.jpg"></img>
			</div>
			<div class="login">
				<ul>
			  		<li><a href="index.php">Login</a></li>
			  		<li><a href="signup.php">Sign-Up</a></li>
				</ul>
			</div>
		</div><!--end of .container div-->
	</div><!--end of .nav div-->

	<div class="jumbotron">
		<div class="container">
	  		<h1>Login to the worlds securest dropbox</h1>

	  		 <form action="main.php" method="POST" enctype="multipart/form-data">
			  <p>Email Address:</p>
			  <input type="text" name="email" required autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Please enter your email">
			  <p>Password:</p>
			  <input type="password" name="password" required placeholder="Enter your password">
			  <br>
			  <input class="button" type="submit" value="Login">
			</form> 

			
			
	  	</div><!--end of .container div-->
	</div><!--end of .jumbotron div-->

	<div class="info">
		<div class="container">
			<div>
				<h3>Storage Space</h3>
				<p>Enjoy free use of 100mb space.</p>
			</div>

			<div>
				<h3>Mobile Friendly</h3>
				<p>Seamless experience from desktop to mobile.</p>
			</div>

			<div>
				<h3>Secure Encryption</h3>
				<p>Count on our encryption to keep your files private.</p>
			</div>
		</div><!--end of .container div-->
	</div><!--end of .info div-->

	<div class="footer">
		<div class="container">
			<p>Volt &copy; 2015</p>
			<p>Created by Flavion Fernandes</p>
		</div>
	</div>
	
<?php //this part has to be modified
				$sql = "SELECT * FROM logins WHERE email = '$email' AND password = '$password' ";
     
				  // send the query
				  $rs = mysql_query( $sql, $conn ) 
						or die( "Could not execute query" );
				
				  // how many rows have come back in response?
				  $rows = mysql_numrows( $rs );
					
				  $row = @mysql_fetch_array($rs);
				  
					if ($rows>0) { 
								$result = 1; 
								
					} else {
								$result = 0;	
					}
			?>
  </body>
</html>