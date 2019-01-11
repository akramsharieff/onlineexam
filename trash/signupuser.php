<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database_in.php");
$rs=mysql_query("select * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
mysql_query("insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=exam.php>Login</a></div>";


?>
<footer style="position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;">
<table  width="100%" cellspacing="0" cellpadding="0" style="border-top:solid #03C;">
  <tr>
    <td width="50%"  bgcolor="#0099FF" height="50px" style="border-top-color:#FF0000;"> 

</td>
    <td width="50%" height="50px"  bgcolor="#00CCFF" style="border-top-color:#FF0000;"></td>
     
  </tr>
</table>
</footer>
</body>
</html>

