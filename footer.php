<footer style="position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;">
<table  width="100%" cellspacing="0" cellpadding="0" style="border-top:solid #03C;">
  <tr>
    <td width="50%"  bgcolor="#0099FF" height="50px" style="border-top-color:#FF0000;"> 

</td>
    <td width="50%" valign="top" align="right" height="50px"  bgcolor="#00CCFF" style="border-top-color:#FF0000;"><marquee direction="right">
	<?php
		$rs=mysql_query("select * from mst_text");
		$row=mysql_fetch_row($rs);
		echo "$row[0]";
	?>
	</marquee></td>
  </tr>
</table>
</footer>