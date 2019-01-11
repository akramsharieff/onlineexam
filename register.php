<?php
include('header.php');
include('database.php');  
//$rs=mysqli_query($cn,"select name,email from candidate");
if(isset($_POST['register'])) // Check form submit or not
{
	$name=$_POST['name'];    

$father=$_POST['father'];  
 
$dob=$_POST['dob'];
 
$email=$_POST['email'];
$topic=$_POST['topic'];    

$mode=$_POST['mode'];  
$query="INSERT INTO candidate(name,fathername,dob,email,topic,mode)VALUES('$name','$father','$dob','$email','$topic','$mode')";
$result=mysqli_query($cn,$query);   
if($result)
	{// Success Message
		echo"
		<script type='text/javascript'>
		function randomString() {
			var  mask = '',	result = '';
			mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';    
			for (var i = 10; i > 0; --i) {
				result += mask[Math.round(Math.random() * (mask.length - 1))];
			}	
			return result;
		}
		function printcard(){
			var rand=randomString()
			var email = '$email' ;
			var name='$name';
			window.location.href='registeraction.php?code='+rand+'&email='+email+'&name='+name;
		}
		printcard();
	</script>";
	}
	else{
		$det = mysqli_query($cn, "select * from candidate where email='$email' ");
		while($row=mysqli_fetch_array($det))
		{
			echo '<script type="text/javascript">alert("Sorry ' . $name . '! '.$row['name'].' has already registered with this E-mail..... ")</script>';
		}
	}
}
?>
<html>
<head>
<title>Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<style>
	.top{
		padding-top:20px;
	}
	#outer
	{
		
		background-color:white; 
		border: 1px solid black;
		border-radius: 8px;
		padding-top:10px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
	}
	input{
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		border-radius:5px;
	}
	td{
		padding:6px;
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
    padding: 8px 20px;
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
		background-color:#f5f5f0;
	}
	input:hover, .change:hover{	
		box-shadow: 1px 2px 3px gray;
	}
	.change{
		margin-top:15px;
		border-radius:3px;
		width:80%;
		height:30px;
		text-align:center;
		border:1px solid #aaa;
	}
	.contain{
		font-size:15px;
	}
</style>

    <div  class="top" align="center" ><h2>Welocome...!</h2><br>
	<h4>Registeration for Admit card</h4></div><br>
   <form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
     <div class="col-md-4 col-md-offset-4" id="outer" align="center">
		<table>
			<tr>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" name="name" type="text" id="input-4" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">Full name</span>
					</label>
				</span>
			</tr>
			<tr>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" name="father" type="text" id="input-4" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">Father's name</span>
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
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" name="email" type="email" id="input-4" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">E-mail</span>
					</label>
				</span>
			</tr>
			<tr>
				<p style="margin-top:15px"><b>Select mode: &nbsp;</b>
				 <label class="contain radio-inline">
						<input type="radio" checked="checked" name="mode" value="online" >on-line
				</label>
				<label class="contain radio-inline">
						<input type="radio" name="mode" value="offline">off-line
					</label>
				</p>
			</tr>
			<div id="offline" class="toHide" style="display:none"><tr>
				<select	 class="change" name="topic" >
													<option value="online" selected="selected">---------------------Select topic----------------------</option>
													<option value="Computer Fundamentals">Computer Fundamentals</option>
													<option value="Visual Basics">Visual Basics</option>
													<option value="Java">Java</option>
													<option value="C Language">C Language</option>
													<option value="Ms Office">Ms Office</option>
													<option value="General Knowledge">General Knowledge</option>
													<option value="php">php</option>
													<option value="SQL">SQL</option>
											
												</select>
			</tr><div>
			<div id="online" class="toHide" style="display:none"></div>
				<tr>
					<td colspan=2 align=center class="errors">
						<div id="final">		
							<input name="register" id="submit" type="submit" value="Register">
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
<script type="text/javascript">
	$(function() {
    $("[name=mode]").click(function(){
            $('.toHide').hide();
            $("#"+$(this).val()).show('slow');
    });
 });
 </script>