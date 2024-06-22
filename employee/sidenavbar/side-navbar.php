<?php
    $email = $_SESSION['email'];
    include("../config/connection.php");

    $select = "SELECT * FROM `emp_leaves` WHERE `email`='$email'";
    $query_run = mysqli_query($conn,$select);
    $data = mysqli_fetch_assoc($query_run);  
   //$firstname= $data['firstname'];
  // $lastname=$data['lastname'];  
   //$emp_name=$firstname.' ' .$lastname;
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
     ul li:hover{
            background-color:#98b1ff;
        }
        body{
            overflow-x: hidden;
        }
    </style>    
</head>   
<body> 
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 vh-100"  id="topbar" style="padding:0; background-image: linear-gradient(-20deg, #6e45e2 0%, #88d3ce 100%);background-repeat: no-repeat;">
    <div class="text-center border-bottom border mb-3">
         <h2 class="p-2 text-light">BLM</h2>
    </div>
    <div class="d-flex align-items-center ms-5">
        <img src="./images/emp.png" height="60px" width="60px" class="" alt="employee_img" style="border-radius:34px; background-color:yellow; padding: 5px;">
        <div class="h5 ms-3 text-light">guest</div>
    </div>
        <div class=" text-light" style="margin-top:-20px;margin-left:116px;font-size:14px;"><i class="fa fa-circle" style="font-size:12px;color:#30f330"></i> Online</div>
    <nav class="navbar mt-5 ms-3">
        <div class="container-fluid ms-3 mt-3">
            <div class="navbar-header w-100">
               <ul class="nav navbar-nav w-100">
                    <li class="pb-4">
                        <a href="emp_dashboard.php" class="h6 text-decoration-none waves-effect text-light waves-light"><i class="fa fa-briefcase"></i> Dashborard</a>
                    </li>  
                    <li class="pb-4">
                        <a href="emp_profile.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-edit"></i> My profile</a>
                    </li>
                    <li class="pb-4">
                        <a href="changepassword.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-drivers-license-o"></i> Change Password</a>
                    </li>
                    <li class="pb-4">
                        <a href="leave.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-drivers-license-o"></i> Apply For Leave</a>
                    </li>
                    <li class="pb-4">
                        <a href="leavetable.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-drivers-license-o"></i> View Leave Status</a>
                    </li>
                    <li class="pb-4">
                        <a href="logout.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-mail-reply"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>
</html>

