<Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION["oec"]))
	{
	 echo "<div align=\"right\"><strong><a href=\"exam.php\"> Home </a>|<a href=\"signout_in.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo " ";
	 }
	?>
	</td>
	
  </tr>
  
</table>