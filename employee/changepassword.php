<?php
session_start();
include("../config/connection.php");

$email=$_SESSION['email'];

if(isset($_REQUEST['submit_btn'])){

    $current_password=trim(md5(mysqli_real_escape_string($conn,$_POST['current_password'])));
    $new_password=trim(md5(mysqli_real_escape_string($conn,$_POST['new_password'])));
    $confirm_password=trim(md5(mysqli_real_escape_string($conn,$_POST['confirm_password'])));
    
    $select_current_password="SELECT `password` FROM `employee_list` where `email`='$email'";
    $select_current_password_run_query=mysqli_query($conn,$select_current_password);

    $fetch_password=mysqli_fetch_assoc($select_current_password_run_query);

    if($current_password==$fetch_password['password']){

      if($new_password==$confirm_password){

        $update_password="UPDATE `employee_list` SET `password`='$new_password' where `email`='$email'";
        $update_password_query_run=mysqli_query($conn,$update_password);

        if( $update_password_query_run){
            echo '<script type="text/javascript">';
            echo ' alert("password changes successfully")'; 
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';              
            echo ' alert("failed to update password .......try agian")'; 
            echo '</script>';
        }

        }
        else{
            echo '<script type="text/javascript">';              
            echo ' alert("password doesn\'nt matches!")'; 
            echo '</script>';
        }
      }
      else{
            echo '<script type="text/javascript">';              
            echo ' alert("password doesn\'nt matches!")'; 
            echo '</script>';
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>   
<body>
    <section>
        <div class="row"  style="background-image: linear-gradient(-20deg, #6e45e2 0%, #88d3ce 100%);">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 position-relative" style="padding:0;background-color:#d2f9ffd1;">
                <div id="menu" class="pe-5" style="padding:18px;background:#45a0d1;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/emp.png" height="50px" width="50px" class="pull-right" alt="user_img" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class="me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 25px;">  user</i>
                </div>
                <div class="card position-absolute w-50 m-4" style="left:5%;top: 20%;  background: linear-gradient(to right, #cecdff, #ffcbd8);">
                    <div class="card-body">
                    <h4 class="card-title" >Change Password</h4>
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="current_pass" class="mt-3">Current Password</label>
                                    <input type="password" class="form-control p-3" name="current_password">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="new_pass" class="mt-3">New password</label>
                                    <input type="password" class="form-control p-3" name="new_password" >
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="confirm_pass" class="mt-3">Confirm password</label>
                                    <input type="password" class="form-control p-3" name="confirm_password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 p-3 " name="submit_btn">Update password</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>

    </section>
</body>
</html>


<!------echo '<script type="text/javascript">';
        echo ' alert("current password is not correct.....reenter and try again")'; 
        echo '</script>';
        header('location:changepassword.php');------->