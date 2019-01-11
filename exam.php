<?php
include("header.php");
include("database.php");
include("redirect.php");
session_start(); 
?>
<html>
<head>
<title>Exam portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<style>
#container {
 width: 300px;
 margin: 0 auto;
}
.styl{
	height: 50px;
    width: 100px;
    margin: 15px 0;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
	color: #000;
}
.styl:hover {
 align="middle";
 height: 50px;
 border-radius: 8px;
 box-shadow: 3px 5px 10px lightgray;
 background:white;
}
</style>
<body>
<?php

extract($_POST);

if(isset($submit))
{
	$qu1="select mode from candidate where email='$email'";
	$rqu1=mysqli_query($cn, $qu1);
	$rmode=mysqli_fetch_assoc($rqu1);
	if($rmode["mode"]=="online")
	{
	$rs="select * from oec where email='$email' and c_oec='$oec'";
	$result = mysqli_query($cn, $rs);
	if(mysqli_num_rows($result)<1)
	{
		$found="N";
		if (isset($_SESSION["login"]))
		{
			session_start();
			session_destroy();
		}
	}
	else
	{
		if (isset($_SESSION["login"]))
		{
			
			session_destroy();
		}
		$_SESSION["oec"]=$oec;
	}
	}	
	else{
		$mode="N";
	}
}
if (isset($_SESSION["oec"]))
	{
		echo "<div align=\"right\"><strong><a href=\"exam.php\"> Home </a>|<a href=\"signout_in.php\">Signout</a></strong></div>
				<h1 class='style8' align=center>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  			<tr align="center">
    		<td width="40%" class="styl" align="center"  bordercolor="#0000FF"> <a  style="text-decoration: none; font-weight: bold; font-size:20px;" href="sublist.php" >Subject for Quiz </a></td>
  			</tr>
  			<tr align="center">
   				 <td width="40%" align="center" class="styl" valign="center"> <a  style="text-decoration: none; font-weight: bold; font-size:20px;" href="result.php">Result </a></td>
  			</tr>
			</table>';
   
		exit;
	}
?>
<style>

	div{
	padding-top: 10px;}
	#outer
	{
		padding: 10px; 
		background-color:white; 
		border: 1px solid black;
		border-radius: 8px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
	}
	form
	{
		color:black;
	}
	input{
		border-radius:5px;
		padding:3px
	}
	#submit
	{
	 background-color: white; 
    color: black; 
    border: 0px solid #e7e7e7;
	 border-radius: 5px;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 10px 10px 40px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	}
	#final
	{
		text-align:center; 
		display:inline; 
		padding-right:2em;	
	}
	#submit:hover
	{
		background-color: #e7e7e7;
	}
	td{
		padding:8px;
	}
	input:hover{	
		box-shadow: 1px 2px 3px gray;
	}
	
</style>
    <div align="center"><h2>User Login</h2></div><br>
   <form name="form1" method="post" action="">
     <div class="col-md-4 col-md-offset-4" id="outer" align="center">
	 <table>
				<tr>
					<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="email" name="email" id="input-4" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">E-mail id</span>
					</label>
				</span>
				</tr>
				<tr>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi"  name="oec" type="password" id="input-4" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">OEC</span>
					</label>
				</span>
				 </tr>
				<tr>
					<td colspan="2">
						<?php
							if(isset($found))
							{
								echo "<div class='alert alert-danger alert-dismissible'>
										 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											<strong>Invalid!</strong> E-mail or OEC.
										</div>";
							}
							else if(isset($mode))
							{
								echo "<div class='alert alert-danger alert-dismissible'>
										 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											You are <strong>not</strong> applied for online mode.
										</div>";
							}
						?>
					</td>
				</tr>
				<tr>
					<td colspan=2 align=center class="errors">
						<div id="final">		
							<input name="submit" id="submit" type="submit" value="Login">
						</div>
					</td>
				</tr>
				<br>
		<tr>
          <td colspan="2"><div align="center" class="alert alert-info"><span class="style4">New User ? <a href="register.php" class="alert-link">Signup Here</a></span></div></td>
          </tr>
	</div>
        
     </center>
    </form></td>
        </div>
  </tr>
</table>
<?php
  include("footer.php");
  ?>
  <script src="js/classie.js"></script>
<script src="js/stable.js"></script>
</body>




</html>
