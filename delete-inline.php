<?php
echo $std_id=$_GET['sid'];
include("dbconn.php");
$sql="DELETE FROM student WHERE sid={$std_id}";
$resut=mysqli_query($conn,$sql) or die("query unsuccessful");
mysqli_close($conn);
header("location:http://localhost/eaglesoft.php/studentdb/index.php");
?>