<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Print</title>
<link href="logo.png" rel="icon" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<style>
.top{
		padding-top: 10px;
	}	
#container {
 width: 300px;
 margin: 0 auto;
}
input{
	border-radius:5px;
	padding:3px
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
td{
	padding:8px;
}
#content{
	padding:5px;
}
</style>
<body>
<?php
include("header.php");
include("database.php");
extract($_POST);
if(isset($submit))
{
	$qu1="select mode from candidate where email='$email'";
	$rqu1=mysqli_query($cn, $qu1);
	$rmode=mysqli_fetch_assoc($rqu1);
	if($rmode["mode"]=="offline")
	{
	$rs="select * from oec where email='$email' and c_oec='$oec'";
	$result = mysqli_query($cn, $rs);
	if(mysqli_num_rows($result)<1)
	{
		$found="N";
		if (isset($_SESSION['login']))
		{
			session_start();
			session_destroy();
		}
	}
	else
	{
		if (isset($_SESSION['login']))
		{
			
			session_destroy();
		}
		$_SESSION['login']=$email;
	}
	}
	else{
		$mode="N";
	}
}
if (isset($_SESSION['login']))
	{
		$det = mysqli_query($cn, "select * from candidate where email='".$_SESSION['login']."'");
		$rs=mysqli_query($cn, "select * from oec where email='".$_SESSION['login']."'");
		$row1=mysqli_fetch_array($rs);	
		while($row=mysqli_fetch_array($det))
		{
				/*<div class='col-md-4'>    
					<img src='logo1.PNG' alt='logo'  style='opacity: .2;' class='img-responsive' width='50%'/>
				</div>*/
			echo "<table width='100%'>
  					<tr>
    					<td>
	 						<div style='padding:10px;' align=\"right\"><b><a clas='sign' href=\"signout.php\">Signout</a></b></div>
						</td>
				  </tr>
  				</table>
				<h1 class='top' align=center>Admit Card</h1><br>
				<div class='col-md-6 col-md-offset-3' style='margin:0 10hw 0 10hw; border:1px solid black; border-radius:8px;'>
				<div align='right' style='padding:15px;'><p class='oecno' >OEC NO: <b>",$row1['c_oec'],"</b></div>
					<p id='content'>Name of the candidate:", $row['name'],"</p>
					<p id='content' >Father's Name:", $row['fathername'],"</p>
					<p id='content' >E-mail ID: ", $_SESSION['login'],"</p>
					<p id='content' >Mode: ", $row['mode']," Mode</p>
					<p id='content'><b>Topic: ", $row['topic']," </b></p>
				<div class='col-md-12' style='padding:15px;'><p class='signature' style='text-align:right;' >signature of the candidate</div>
			</div>
			";
		}
		exit;
	}
?>
<style>

	.top{
	padding-top: 70px;}
	#outer
	{
		
		padding: 10px; 
		background-color:white; 
		border: 1px solid black;
		border-radius: 8px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
	}
	input{
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
	}
	form
	{
		color:black;
	}
	#final
	{
		text-align:center; 
		display:inline; 
		padding-right:2em;	
	}
	#submit
	{
	 background-color: white; 
    color: black; 
    border: 0px solid #e7e7e7;
	 border-radius: 5px;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 10px 10px 40px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	}
	#submit:hover
	{
		background-color: #e7e7e7;
	}
	input:hover{	
		box-shadow: 1px 2px 3px gray;
	}
	td{
		padding:8px;
	}
</style>

    <div class="top" align="center"><h2>Login to print Admit Card</h2></div><br>
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
								echo "<center>Invalid ID or OEC</center>";
							}
							else if(isset($mode))
							{
								echo "<div class='alert alert-danger alert-dismissible'>
										 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											You are <strong>not</strong> applied for offline mode.
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
	</div>
        
    </form></td>
  </tr>
</table>
<script src="js/classie.js"></script>
<script src="js/stable.js"></script>
</body>




</html>
