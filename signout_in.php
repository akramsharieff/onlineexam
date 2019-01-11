<?php
session_start();
session_destroy();
header("Location: exam.php");
include("footer.php");
?>
