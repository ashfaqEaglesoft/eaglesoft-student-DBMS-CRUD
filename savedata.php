<?php
echo $std_name=$_POST['sname'];
echo $std_address=$_POST['saddress'];
echo $std_class=$_POST['class'];
echo $std_phone=$_POST['sphone'];
include("dbconn.php");
$sql="INSERT INTO student (sname, saddress,sclass,sphone)
VALUES ('{$std_name}','{$std_address}','{$std_class}','{$std_phone}')";
mysqli_query($conn,$sql);
mysqli_close(include('dbconn.php'));
header("location:http://localhost/eaglesoft.php/studentdb/index.php");
?>