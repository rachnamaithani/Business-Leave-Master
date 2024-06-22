<?php
session_start();
 include("../config/connection.php");

 if(isset($_REQUEST['submit'])){

    date_default_timezone_set('Asia/Calcutta'); 
    $time = date('H:i:s');
    $date = date('d-m-Y');
    $timing=$date." ".$time;
    $email = $_SESSION['email'];
    $leavefrom=$_POST['leavefrom'];
    $leaveto=$_POST['leaveto'];
    $typeofleave=$_POST['typeofleave'];
    $description=$_POST['description'];
    $select = "INSERT INTO `emp_leaves` (`email`, `timing`, `leavefrom`, `leaveto`, `typeofleave`, `description`) VALUES ('$email','$timing', '$leavefrom', '$leaveto', '$typeofleave', '$description')";
    $query_run=mysqli_query($conn,$select);

    if($query_run){
        echo '<script type="text/javascript">';
        echo ' alert("successfully applied for leave")'; 
        echo '</script>';
    }
    else{
        echo '<script type="text/javascript">';                                                                                         //sqli  injection,trim()
        echo ' alert("failed to apply ")'; 
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
                <div id="menu"  class="pe-5" style="padding:18px;background:#45a0d1;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/emp.png" height="50px" width="50px" class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  user</i>
                </div>
                <div class="card position-absolute" style="width: 65rem; left:5%;top: 20%;background: linear-gradient(to right, #a1ffce, #faffd1);">
                    <div class="card-body">
                        <form method="post">
                            <h5 class="card-title">Apply for leave</h5>
                            <div class="form-row row">
                                <div class="form-group col-md-6">
                                    <label for="datefrom" class="mt-3">From</label>
                                    <input type="date" class="form-control p-3" name="leavefrom" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dateto" class="mt-3">To</label>
                                    <input type="date" class="form-control p-3" name="leaveto" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="form-group col-md-12">
                                    <label for="State" class="mt-3">Select leave type..</label>
                                    <select class="form-control p-3" name="typeofleave">
                                        <option selected>Choose...</option>
                                        <option>Casual leave</option>
                                        <option>Half pay leave</option>
                                        <option>Sick leave</option>
                                        <option>Marriage leave</option>
                                        <option>Travel leave</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="description" class="mt-3">Description</label>
                                <input type="text" class="form-control p-3" name="description">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3 p-3 w-25" name="submit">Submit</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>

    </section>
</body>
</html>