<?php include 'header.php'; ?>
<?php
if(isset($_POST['deletebtn'])){
$std_id=$_POST['sid'];
    include("dbconn.php");
    $sql="DELETE FROM student where sid={$std_id}" or die("Query unsuccessful");
    $result=mysqli_query($conn,$sql) or die("Query unsuccessfull");
    header("location:http://localhost/eaglesoft.php/studentdb/index.php");
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
