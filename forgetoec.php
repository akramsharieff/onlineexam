<?php
include('header.php');
include('database.php');  
?>
<html>
<head>
<title>Verify</title>
<link href="logo.png" rel="icon" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
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
		border-radius:5px;
	padding:3px;
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

    <div class="top" align="center"><h2>Verify Your OEC </h2></div><br>
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
				<span class="input input--jiro">
					<input class="input__field input__field--jiro" name="dob" type="date" id="input-10" required />
					<label class="input__label input__label--jiro" for="input-10">
						<span class="input__label-content input__label-content--jiro">DOB</span>
					</label>
				</span>
			</tr>
				<tr>
					<td colspan="2">
						<?php
							extract($_POST);
							if(isset($verify))
							{
								$rs="select * from candidate where email='$email' and dob='$dob'";
								$result = mysqli_query($cn, $rs);
								if(mysqli_num_rows($result)<1)
								{
									echo "<center>Invalid ID or DOB</center>";
								}
								else
								{
									$foec = mysqli_query($cn, "select * from oec where email='$email'");
									while($row=mysqli_fetch_array($foec))
									{
										echo"<center>Your OEC is: <b>",$row['c_oec'],"</b></center>";
									}	
								}
							}
						?>
					</td>
				</tr>
				<tr>
					<td colspan=2 align=center class="errors">
						<div id="final">		
							<input name="verify" id="submit" type="submit" value="Verify">
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