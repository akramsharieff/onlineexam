<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<style>
#container {
 width: 300px;
 margin: 0 auto;
}
.styl{
	height: 10px;
    width: 200px;
    margin: 15px 0;
    -webkit-transition: all 1s ease;
    -moz-transition: all 0s ease;
    -o-transition: all 0s ease;
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
include("header.php");
include("database_in.php");
include("redirect.php");
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
$rs=mysql_query("select * from mst_subject");
#------------------------------------
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs2=mysql_query("select * from mst_test where sub_id=$subid");
#-------------------------------------------
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center class='styl'><a href=showtest.php?subid=$row[0] style='text-decoration: none; font-weight: bold; font-size:40px;'><font size=4>$row[1]</font></a>";
	#-----------------------------------------
	
#------------------------------------------
}
echo "</table>";
  include("footer.php");
?>

</body>
</html>
