<?php
include('header.php');
include('database.php');  
$mail=$_GET['email'];
$generate=$_GET['code'];
$name=$_GET['name'];
$query="INSERT INTO oec(email,c_oec)VALUES('$mail','$generate')";
$result=mysqli_query($cn,$query);  
?>
<html>
<head>
<title>Register</title>
<link href="logo.png" rel="icon" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<style>
	.top{
		padding-top: 10px;
	}
	#generate{
		font-weight:bold;
		text-align:center;
	}
</style>
<div class="top" align="center" ><h2>Your Registeration is Succesful....  </h2><br>
	<h4>Thank You for Registering <?php echo $name;?>!!!</h4><br>
	<h4>Your OEC code is:</h4>
	<?php echo "<h4><b>",$generate,"</b></h4><br>";?>
	<p style="font-size:20px;"><b>Note:</b>Please make sure to store your OEC code.</p>
	<p style="font-size:19px;">If you choose off-line exam please click <a class="top" href= "printcard.php">here</a> to print admit card.</p>
</div>	
</html>
	