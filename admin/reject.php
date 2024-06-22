<?php
    include('../config/connection.php');
    $id=$_GET['id'];
    $leave_status="rejected";
    $update="UPDATE `emp_leaves` SET `leave_status`='$leave_status' WHERE `id`='$id'";
    $query=mysqli_query($conn,$update);

    echo '<script type="text/javascript">';
    echo ' alert("leave rejected successfully!")'; 
    echo '</script>';
    header('location:leavelist.php');
?>