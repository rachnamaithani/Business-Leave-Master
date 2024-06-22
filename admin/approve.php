<?php
    include('../config/connection.php');
    $id=$_GET['id'];
    $leave="approved";
    $update="UPDATE `emp_leaves` SET `leave_status`='$leave' WHERE `id`='$id'";
    $query=mysqli_query($conn,$update);
        if($query){
            echo '<script type="text/javascript">';
            echo ' alert("leave granted successfully!")'; 
            echo '</script>';
            header('location:leavelist.php');
        }
    
   
?>