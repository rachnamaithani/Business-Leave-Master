<?php
include('../config/connection.php');
if(isset($_REQUEST['submit_btn'])){
    $firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname= mysqli_real_escape_string($conn, $_POST['lastname']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= md5(mysqli_real_escape_string($conn, $_POST['password']));
    $gender= mysqli_real_escape_string($conn, $_POST['gender']);

    $filename=$_FILES['user_file']['name'];
    $tempname=$_FILES['user_file']['tmp_name'];
    $tempname2 = explode(".",$filename);
    $newfile = rand(1,9999) . '.' .end($tempname2);
    $folder = "../admin/images/".$newfile;
    move_uploaded_file($tempname, $folder);

    $phone_no= mysqli_real_escape_string($conn, $_POST['phone_no']);
    $position= mysqli_real_escape_string($conn, $_POST['position']);
    $dateofbirth= mysqli_real_escape_string($conn, $_POST['dateofbirth']);
    $state= mysqli_real_escape_string($conn, $_POST['state']);
    $city= mysqli_real_escape_string($conn, $_POST['city']);
    $address= mysqli_real_escape_string($conn, $_POST['address']);
    
    $insert= "INSERT INTO `employee_list` (`firstname`,`lastname`,`email`,`password`,`gender`,`image`,`position`,`phoneno`,`dateofbirth`,`state`,`city`,`address`) 
                            VALUES ('$firstname','$lastname','$email','$password','$gender','$folder','$position','$phone_no','$dateofbirth','$state','$city','$address')";
    $query_run=mysqli_query($conn,$insert);
    if($query_run){
        echo '<script type="text/javascript">';
        echo ' alert("successfully inserted")'; 
        echo '</script>';
    }
    else{
        echo '<script type="text/javascript">';                                                                                         //sqli  injection,trim()
        echo ' alert("failed to insert data")'; 
        echo '</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>   
<body>
    <section class="">
        <div class="row"  style="background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%);">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding:0;background:#d0d6ffd1;">
                <div id="menu" class="pe-5" style="padding:18px;background:#9837d8;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/admin.png" height="50px" width="50px" class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  Admin</i>
                </div> 
                <div>
                <h2 class="mainheading text-center mt-4">Registration Form</h2>
                    <hr>
                <form method="post" class="ps-5 pe-5"  enctype="multipart/form-data">
                    <div class="form-row row mb-4">
                        <div class="form-group col-md-6 ">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control p-2" name="firstname" placeholder="First name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control p-2" name="lastname" placeholder="Last name"  required>
                         </div>
                    </div>
                    <div class="form-row row">
                        <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control p-2" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control p-2" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row row mb-2">
                        <div class="form-group col-md-6">
                             <label for="gender" class="mt-5">Gender</label>
                            <label for="gender" class="ms-3">Male</label>
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="gender" class="ms-3">Female</label>
                            <input type="radio" id="female" name="gender" value="female" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="file" class="mt-5">upload your image</label>
                        <input type="file" class="p-2" name="user_file">
                        </div>
                    </div>
                    <div class="form-row row mb-4">
                        <div class="form-group col-md-6">
                        <label for="phoneno">Phone Number</label>
                        <input type="number" class="form-control p-2" name="phone_no" placeholder="*** *** ****" >
                        </div>
                        <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="position">Position</label>
                            <select class="form-control p-2" name="position" selected="intern">
                            <option value="poject manager">Project Manager</option>
                            <option value="php developer">PHP Developer</option>
                            <option value=".net developer">.Net Developer</option>
                            <option value="nodejs developer">Node JS Developer</option>
                            <option value="qa engineer">QA(tester)</option>
                            <option value="scrum master">Scrum Master</option>
                            <option value="hr">HR</option>
                            <option value="python developer">Python Developer</option>
                            <option value="intern">intern</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="form-row row mb-4">
                    <div class="form-group col-md-4">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" class="form-control p-2"name="dateofbirth">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <select  class="form-control p-2" name="state">
                            <option value="" selected>Choose...</option>
                            <option value="maharastra">Maharastra</option>
                            <option value="haryana">Haryana</option>
                            <option value="punjab">Punjab</option>
                            <option value="himachal pradesh">Himachal Pradesh</option>
                            <option value="assam">Assam</option>
                            <option vale="uttarpradesh">uttar pradesh</option>
                            <option value="j&k">Jammu and Kashmir</option>
                            <option value="madhya pradesh">Madhya Pradesh</option>
                            <option value="odisha">Odisha</option>
                            <option value="bihar">Bihar</option>
                            <option value="west bengal">West Bengal</option>
                            <option value="gurajat">Gurajat</option>
                            <option vaue="rajasthan">Rajasthan</option>
                            <option vaue="rajasthan">Uttarakhand</option>
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <input type="text" class="form-control p-2" name="city">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="address">Address</label>
                        <input type="text" class="form-control p-2" name="address">
                    </div>
                    <button type="submit" class="btn btn-success mb-3 p-2 w-100" name="submit_btn">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>