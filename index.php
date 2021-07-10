<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    include("dbconn.php");
    $sql="SELECT * FROM student join studentclass where student.sclass=studentclass.cid";
    $resut=mysqli_query($conn,$sql) or die("query unsuccessful");
    if(mysqli_num_rows($resut)>0){
    ?>


    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <?php while($row=mysqli_fetch_assoc($resut)){
            ?>
        <tbody>

            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?sid=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php?sid=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>