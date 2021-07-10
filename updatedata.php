<?php
echo $std_id=$_POST['sid'];
echo $std_name=$_POST['sname'];
echo $std_address=$_POST['saddress'];
echo $std_class=$_POST['sclass'];
echo $std_phone=$_POST['sphone'];
include('dbconn.php');
$sql="UPDATE student SET sname='{$std_name}',saddress='{$std_address}',sclass='{$std_class}',sphone='{$std_phone}' where sid='{$std_id}'" or die("Query unsuccessful");
$result=mysqli_query($conn,$sql);
header("location: http://localhost/eaglesoft.php/studentdb/index.php");

?>