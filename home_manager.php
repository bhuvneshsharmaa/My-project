<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/my project/manager.html');
?>
<!doctype html>
<html>
<head>
	<title>RED CROSS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		span{
			font-size: 35px;
			font-weight: 700;
			text-transform: uppercase;
			color:red;
		}
	</style>
</head>
<body>
<div class="jumbotron">
	<p style="text-align: center;"><span >welcome to the login pannel</span></p>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 bg-warning">
			<h1> Hello <?php echo $_SESSION['username']?> 
				<ul>
					<li><a href="S">view donor</a></li>
					<li><a href="S">delete donor</a></li>
					<li><a href="view_enquiry.php">view enquiry</a></li>
					<li><a href="S">search donor</a></li>
				</ul>
<a href="logout.php"><br>logout</a>
		</div>
		<div class="col-md-6 bg-warning">
			<img src="blood2.jpg" style="width: 100%; background-size: cover;height: 100%;">
		</div>
	</div>
</div>
</body>
</html>
