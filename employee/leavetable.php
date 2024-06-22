<?php
session_start();
    $email=$_SESSION['email'];
    include("../config/connection.php");

    $select="SELECT * FROM `emp_leaves` WHERE `email`='$email'";
    $query_run=mysqli_query($conn,$select);
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
    <style>
        th{
            background-color:#6585ff !important;
            border: 0.5px solid black !important;
        }
        td:nth-child(odd){
            background-color: #b7a9ff !important;
        }
        td:nth-childe(even){
            background-color: #74c7ed !important;
        }
    </style>
</head>   
<body>
    <section class="">
        <div class="row " style="background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%);">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding:0;background-color:#d2f9ffd1;">
                <div id="menu" class="pe-5" style="padding:18px;background:#45a0d1;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/emp.png" height="50px" width="50px" class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  user</i>
                </div> 
                <div>
                <h1 class="mainheading text-center mt-4">Leave Status</h1>
                <hr>
                <table class="table ">
                <thead>
                    <tr >
                    <th scope="col">S NO.</th>
                    <th scope="col">Email</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">leave type</th>
                    <th scope="col">Applied Time</th>
                    <th scope="col">Description</th>
                    <th scope="col">Admin's Remark</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php
                         $i=1;
                         while($data=mysqli_fetch_array($query_run)){
                    ?>
                        <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $data['leavefrom'];?></td>
                        <td><?php echo $data['leaveto'];?></td>
                        <td><?php echo $data['typeofleave'];?></td>
                        <td><?php echo $data['timing'];?></td>
                        <td><?php echo $data['description'];?></td>
                        <td>
                            <?php
                             if(isset($data['leave_status']))
                                    echo $data['leave_status'];
                            else
                                echo "wait for approval....";
                            ?>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>     