<!DOCTYPE html>
<html>

	<head>
		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstradp.css">
		<link rel="stylesheet" type="text/css" href="settings.css">
		<script src="index.js" type="text/javascript"></script>
		<title>Settings</title>					
	</head> 

  <body>
  	<div class="nav">
  		<div class="container">
  			<div class="image">
  				<img src="images/vault2.jpg"></img>
			</div>
			<div class="login">
				<ul>
			  		<li><a href="main.php">Home</a></li>
			  		<li><a href="settings.php">Settings</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</div>
		</div><!--end of .container div-->
	</div><!--end of .nav div-->

<div class="jumbotron">
	<div class="container">
		<div class="changecolor">
			<p>Change theme color: </p>
				 
				 	Color 1<input type="radio" name="color" value="#3D59AB" onclick="theme(this.value)" checked="checked"><br>
				 	Color 2<input type="radio" name="color" value="orange" onclick="theme(this.value)"><br>
				 	Color 3<input type="radio" name="color" value="green" onclick="theme(this.value)"><br>
				
		</div> <!-- end of changecolor div-->

		<div class="space">
			<p>Space overview: </p>
			<span>Total space -</span><br>
			<span>Space used -</span><br>
			<span>Space available -</span>
		</div> <!-- end of space div-->

		<div class="save">
			<input type="submit" name="color" value="Save">
		</div>
	</div> <!-- end of container div-->
</div> <!-- end of jumbotron div-->



	<div class="footer">
		<div class="container">
			<p>Volt &copy; 2015</p>
			<p>Created by Flavion Fernandes</p>
		</div>
	</div>

  </body>
</html>







