<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<style>
#container {
 width: 300px;
 margin: 0 auto;
}
.styl{
	height: 50px;
    width: 200px;
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
include("header.php");
include("redirect.php");
include("database_in.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center class='styl' ><a style='text-decoration: none; font-weight: bold; font-size:20px;' href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
include("footer.php");
  ?>
</body>
</html>
