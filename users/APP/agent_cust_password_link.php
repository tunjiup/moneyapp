<html >
<head>
	<title><?php include "info.php"; echo $name1;?>  Sign up</title> 
	<link href="acti.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<!-- start header div -->
	<div id="header">
		<h3><?php include "info.php"; echo $name1;  ?> > Password Reset<strong></strong></h3>
	
	
</div>
	<!-- end header div -->	

	<!-- start wrap div -->
	<div id="wrap"><a href="cust_change_password_reset.php">CLICK HERE TO RESET TO A NEW PASSWORD For <?php session_start(); echo $_GET['email_f'];  ?></a></div>
	<!-- end wrap div -->
</body>
</html>
<?php 

$_SESSION['email']=$_GET['email_f'];

?>