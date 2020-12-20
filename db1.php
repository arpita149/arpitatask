<?php
//echo 'db file called'; 
$con = mysqli_connect("localhost","task","localhost14") or die("DB Server is down");
mysqli_select_db($con,"task_") or die("DB not available");
?>