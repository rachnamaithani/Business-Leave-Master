<?php
    session_start();
    include('../config/connection.php');

     $id=$_SESSION['id'];
     $email=$_SESSION['email'];
     $select="SELECT * FROM `employee_list` where `email`='$email'";
     $query=mysqli_query($conn,$select);

     $data=mysqli_fetch_array($query);

     $image=$data['image'];
     $firstname=$data['firstname'];
     $lastname=$data['lastname'];
     $gender=$data['gender'];
     $dateofbirth=$data['dateofbirth'];
     $position=$data['position'];
     $phoneno=$data['phoneno'];
     $state=$data['state'];
     $city=$data['city'];
     $address=$data['address'];
     
     if(isset($_REQUEST['submit'])){

        $firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname= mysqli_real_escape_string($conn, $_POST['lastname']);
        $email= mysqli_real_escape_string($conn, $_POST['email']);
        $gender= mysqli_real_escape_string($conn, $_POST['gender']);

        $filename=$_FILES['user_file']['name'];
        $tempname=$_FILES['user_file']['tmp_name'];
        $tempname2 = explode(".",$filename);
        $newfile = rand(1,9999) . '.' .end($tempname2);
        $folder = "../../admin/images/".$newfile;
         move_uploaded_file($tempname, $folder);
         $update_emp_img="UPDATE `employee_list` SET `image`='$folder' where `id`='$id'";
         $query_run1=mysqli_query($conn,$update_emp_img);
        
        $phone_no= mysqli_real_escape_string($conn, $_POST['phone_no']);
        $position= mysqli_real_escape_string($conn, $_POST['position']);
        $dateofbirth= mysqli_real_escape_string($conn, $_POST['dateofbirth']);
        $state= mysqli_real_escape_string($conn, $_POST['state']);
        $city= mysqli_real_escape_string($conn, $_POST['city']);
        $address= mysqli_real_escape_string($conn, $_POST['address']);
    
        $update="UPDATE `employee_list` SET `firstname`='$firstname' ,`lastname`='$lastname',`email`='$email',`gender`='$gender',`phoneno`='$phone_no',`position`='$position',`dateofbirth`='$dateofbirth',`state`='$state',`city`='$city',`address`='$address' where `id`='$id'";
        $query_run2=mysqli_query($conn,$update);
        
        if($query_run2){
            echo '<script type="text/javascript">';
            echo ' alert("data updated successfully")'; 
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">';                                                                                         //sqli  injection,trim()
            echo ' alert("failed to update data")'; 
            echo '</script>';
        }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>   
<body>
    <section>
        <div class="row"  style="background-image: linear-gradient(-20deg, #6e45e2 0%, #88d3ce 100%);">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding:0;background:#d2f9ffd1;">
                <div id="menu" class="pe-5" style="padding:18px;background:#45a0d1;">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/emp.png" height="50px" width="50px" name='user_file' class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  user</i>
                </div> 
                <div>
                <form method="post" class="ps-5 pe-5 pt-5" enctype="multipart/form-data">
                    <div class="form-row row mb-4">
                        <h5>Edit Profile</h5>
                        <div class="form-group col-md-4 ">
                            <img src="<?php echo $image ?>" alt="user_img" class="mt-3" width="150px" height="150px"><br>
                            <label for="file" class="mt-2" >upload your image</label><br>
                            <input type="file" class="" id="file" name="user_file" >  
                        </div>
                        <div class="form-group col-md-8 ">
                            <label for="firstname" class="mt-3">First name</label>
                            <input type="text" class="form-control p-3" name="firstname" value="<?php echo $firstname?>" placeholder="First name" required>
                            <label for="lastname" class="mt-3">Last name</label>
                            <input type="text" class="form-control p-3" name="lastname" value="<?php echo $lastname?>" placeholder="Last name"  required>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="form-group col-md-4">
                             <label for="inputPassword" class="mt-4 ms-2">Gender:*</label>
                            <label for="gender" class="ms-3">Male</label>
                            <input type="radio" id="male" name="gender" <?php if ($gender=="male" ) echo "checked";?> value="male" required>
                            <label for="gender" class="ms-3">Female</label>
                            <input type="radio" id="female" name="gender" <?php if ($gender=="female" ) echo "checked";?> value="female" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputEmail" class="mt-2">Email</label>
                            <input type="email" name="email" class="form-control p-3" value="<?php echo $email;?>" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row row mb-6">
                        <div class="form-group col-md-6">
                            <label for="inputdob" class="mt-3">Date of Birth</label>
                            <input type="date" name="dateofbirth" value="<?php echo $dateofbirth?>" class="form-control p-3">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="position" class="mt-3">Position</label>
                                <select class="form-control p-3" name="position" selected="<?php echo $position?>">
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
                        <label for="phoneno" class="mt-3">Phone Number</label>
                        <input type="number" class="form-control p-3" name="phone_no" value="<?php echo $phoneno?>" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState" class="mt-3">State</label>
                        <select class="form-control p-3" name="state" selected="<?php echo $state?>">
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
                        <label for="inputCity" class="mt-3">City</label>
                        <input type="text" class="form-control p-3" name="city" value="<?php echo $city?>">
                    </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputAddress" class="mt-2">Address</label>
                        <input type="text" class="form-control p-3" name="address" value="<?php echo $address?>">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 p-3 w-100" name="submit">Update</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>