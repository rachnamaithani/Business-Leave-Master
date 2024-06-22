<?php
  session_start();
  include("../config/connection.php");
  if(isset($_REQUEST['submit_btn'])){

     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $password=md5(mysqli_real_escape_string($conn,$_POST['password']));
     $select="SELECT * FROM `employee_list` where `email`='$email' AND `password`='$password'";
   
    $query_run=mysqli_query($conn,$select);
    
    $fetch=mysqli_fetch_array($query_run);
     //$email = $fetch['email'];
    if($fetch){
     $_SESSION['email']=$fetch['email'];
     $_SESSION['id']=$fetch['id'];
    }
  if(mysqli_num_rows($query_run)==1){
    ?>
      <script>
        window.location.href="emp_dashboard.php";      
      </script>
      <?php
    }
    else{
			?>
			<script>
				alert("incorrect email or password");
			</script>
			<?php
		}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style1.css" rel="stylesheet">
    <title>Employee login</title>
</head>
<body class="vh-100"> 
<section class="top-section p-3" style="background-color: #4c4cff;height: 60px;">
  <div class="h4 text-white">Business Leave Master</div>
</section>
<section class="vh-75">
  <div class="container w-75" style="height: 550px;">
    <div class="row d-flex justify-content-center align-items-center logincontainer bg-white h-100 m-5">
      <div class="col-5">
        <div class="card shadow-2-strong logincard" style="border: none;">
          <div class="card-body p-5 text-center position-relative">
            <img src="images/emp.png" alt="adminlogo" height="100px" width="100px" class="admin-pic position-absolute">
            <h4 class="mb-5 mt-3">Employee Log In</h4>
            <form method="post">
                <div class="form-outline mb-4">
                <!----------<label for="text" class="float-start h5">Email</label>----------->
                <input type="email" class="form-control form-control" name="email" placeholder="enter your email adress">
                </div>

                <div class="form-outline mb-4">
                <!------------<label for="text" class="float-start h5">Password</label>-------->
                <input type="password" class="form-control form-control" name="password" placeholder="enter your password">
                </div>
                <button class="btn btn-primary btn btn-block w-100" name="submit_btn" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-5">
        <img src="images/employeess.png" alt="img" width="100%">
      </div>
    </div>
  </div>
</section>
</body>
</html>