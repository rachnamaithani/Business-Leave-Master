<?php 
    include('../config/connection.php');

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave List</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        th{
            background-color: #c078ff !important;
        }
        td:nth-child(odd){
            background-color: #ffa9f1 !important;
        }
        td :nth-child(even){
            background-color: #b1cbff !important;
        }
    </style>
</head>   
<body>
    <section class="">
        <div class="row" style="background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%);">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 " style="padding:0;background:#d0d6ffd1;">
                <div id="menu" class="pe-5" style="padding:18px;background:#9837d8;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/admin.png" height="50px" width="50px" class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  Admin</i>
                </div> 
                <div>
                <h2 class="mainheading text-center mt-4">Employees Leave Data</h2>
                <hr>
                <div class="ms-2 me-4">
                <table class="table border ">
                <thead >
                    <tr>
                        <th scope="col">S NO.</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">applied Time</th>
                        <th scope="col">leave Type</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>   
                        <th scope="col">Detail Reason</th>   
                        <th scope="col">Action</th> 
                        <th scope="col">Status      </th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $x = 1;
                    $employee_all_data_get = "SELECT * FROM `employee_list`, `emp_leaves` WHERE employee_list.email=emp_leaves.email "; 
                    $run_query_employee_all_data_get = mysqli_query($conn, $employee_all_data_get);
                     
                    while($data2 = mysqli_fetch_array($run_query_employee_all_data_get)){
                    ?>
                    <tr>
                        <td><?php echo $x++;?></td>
                        <td><?= $data2['firstname'];?></td>
                        <td><?php echo $data2['lastname'];?></td>
                        <td><?php echo $data2['position'];?></td>
                        <td><?php echo $data2['timing'];?></td>
                        <td><?php echo $data2['typeofleave'];?></td>
                        <td><?php echo $data2['leaveto'];?></td>
                        <td><?php echo $data2['leavefrom'];?></td>
                        <td><?php echo $data2['description'];?></td>
                        <td>
                            <a class="btn btn-success mb-2" href ="approve.php?id=<?php echo $data2['id'];?>">Approved</a>		  
                            <a class="btn btn-danger" href = 'reject.php?id=<?php echo $data2['id'];?>'>Reject</a>  
                        </td>
                        <td> 
                            <?php
                            $leave_id=$data2['id'];
                            $leave_state="SELECT * FROM `emp_leaves` WHERE `id`='$leave_id'";
                            $query2=mysqli_query($conn,$leave_state);

                            $fetch2=mysqli_fetch_array($query2);
                            echo $fetch2['leave_status'];
                            ?>
                        </td>
                        <?php
                        }
                        ?>				 
                </tbody>
                </div>
                </table>
            </div>
        </div>
    </section>
</body>
</html>