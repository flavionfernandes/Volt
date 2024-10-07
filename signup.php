<!DOCTYPE html>
<html>

	<head>
		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstradp.css">
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Signup</title>
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
					<li><a href="test.php">Test Connection</a></li>
				</ul>
			</div>
		</div><!--end of .container div-->
	</div><!--end of .nav div-->

	<div class="jumbotron">
		<div class="container">
	  		<h1>Sign up to the worlds securest dropbox</h1>

	  		 <form action="signup.php" method="POST">
			  <p>Email Address:</p>
			  <input type="text" name="email" required autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Please enter your email">
			  <p>Password:</p>
			  <input type="text" name="password" required placeholder="Enter your password">
			  <p>Confirm Password:</p>
			  <input type="text" name="confirmpassword" required placeholder="Confirm your password">
			  <br>
			  <input class="button" type="submit" value="Register">
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

<?php
				//die ("die");
				
					$email = $_POST['email'];
					$password = $_POST['password'];
					$message = "wrong answer";
					
					
					addData($email, $password);
				


				function cleanData($data){
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					$data = strip_tags($data);
					return $data;
				}

				function addData ($email, $password)
				{
					//include("dbinfo.php");
					   $dbhost = 'mysql11.000webhost.com';
					   $dbuser = 'a4517500_flavion';
					   $dbpass = 'honvic007';
					   $dbname = 'a4517500_Logins';
					   
					
					   
					    $conn = mysql_connect("$dbhost", "$dbuser", "$dbpass")
								or die("Unable to connect to MySQL");
								echo "Connected to MySQL<br>";
					$selected = mysql_select_db ( "a4517500_Logins",$conn)
									or die("Could not select database");
					$sql="INSERT INTO logins (email, password) VALUES ('$email', '$password')";
					$result=mysql_query($sql, $conn) or die(mysql_error());
					echo $sql;
					die ("hello");
				}
				
				/* function addData ($email, $password)
				{
					//include("dbinfo.php");
					$dbhost = 'mysql11.000webhost.com';
					$dbuser = 'a4517500_flavion'; //censored for security
					$dbpass = 'honvic007'; //censored for security
					$dbname = 'Logins'; // this is currently missing
					$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
					// check connection
					if ($mysqli->connect_errno) {
						die("Connect failed: ".$mysqli->connect_error);
					}
					// define the query
					$sql="INSERT INTO Logins (email, password) VALUES ($email, $password)";
					// prepare the query
					if (!$stmt = $mysqli->prepare($sql)) {
						// failed to prepare query;
						die("Prepare failed: ".$stmt->error);
					}
					// bind the parameters
					if (!$res = $stmt->bind_param('ss', $email, $password)) {
						// failed to bind
						die("Bind failed: ".$stmt->error);
					}
					// execute
					if (!$res = $stmt->execute()) {
						// failed to execute
						die("Execute failed: ".$stmt->error);
					}
					echo "Rows inserted: ".$stmt->affected_rows;
				} */
			?>
  </body>
</html>