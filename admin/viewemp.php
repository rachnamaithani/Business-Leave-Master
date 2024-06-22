<?php
include('../config/connection.php');

$select= "SELECT * FROM `employee_list`";
$query_run=mysqli_query($conn,$select);

if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page= 1;
}
$records=5;
$start_from= ($page-1)* $records;
$query= "SELECT * FROM `employee_list` ORDER BY id DESC LIMIT $start_from,$records";
$query= mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard View Employee List</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="row " style="background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%);">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding:0;background:#d0d6ffd1;">
                <div id="menu" class="pe-5" class="pe-5"style="padding:18px;background:#9837d8;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/admin.png" height="50px" width="50px" class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  Admin</i>
                </div> 
                <div>
                <h2 class="mainheading text-center mt-4">View Employee Details</h2>
                <hr>
                <table class="table">
                <thead>
                    <tr >
                    <th scope="col">S NO.</th>
                    <th scope="col">image</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email </th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Position</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                           $i=1;
                           while($empdata = mysqli_fetch_array($query)){  
                            ?>
                             <tr>
                                <td><?php echo $i++;?></td>
                                <td><img src="./images/<?php echo $empdata['image'];?>"  width="50px" height="50px" alt="empimg"></td>
                                <td><?php echo $empdata['firstname'];?></td>
                                <td><?php echo $empdata['lastname'];?></td>
                                <td><?php echo $empdata['email'];?></td>
                                <td><?php echo $empdata['gender'];?></td>
                                <td><?php echo $empdata['phoneno'];?></td>
                                <td><?php echo $empdata['position'];?></td>
                                <td><?php echo $empdata['dateofbirth'];?></td>
                                <td><?php echo $empdata['state'];?></td>
                                <td><?php echo $empdata['city'];?></td>
                                <td><?php echo $empdata['address'];?></td>
                                </tr>
                            <?php
                            }
            $number_of_records=mysqli_num_rows($query_run);
            $num_of_pages=ceil($number_of_records/$records);
            ?>
            <ul class="pagination">
                <nav aria-label="Page navigation example">
                     <ul class="pagination">
            <?php
            for($i=1;$i<=$num_of_pages;$i++){
                ?>
                     <li class="page-item">
                         <?php echo '<a href = "viewemp.php?page=' . $i . '">' . $i . ' </a>'; ?>
                     </li>
            <?php
                }
            ?>
            </ul>
                </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>