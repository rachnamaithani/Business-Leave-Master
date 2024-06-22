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
            background-color:#af33ff;
        }
        body{
            overflow-x: hidden;
        }
    </style>    
</head>   
<body> 
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 vh-100"  id="topbar" style="padding:0;background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%);background-repeat: no-repeat;">
    <div class="text-center border-bottom border mb-3   ">
         <h2 class="p-2 text-light">BLM</h2>
    </div>
    <div class="d-flex align-items-center ms-3 ">
        <img src="images/admin.png" height="60px" width="60px" class="ms-2" alt="adminimg" style="border-radius:34px; background-color:yellow; padding: 5px;">
        <div class="h5 ms-3 text-light">Administrator</div>
    </div>
        <div class=" text-light" style="margin-top:-17px;margin-left:90px;font-size: 14px"><i class="fa fa-circle" style="font-size:12px;color:#30f330"></i> Online</div>
    <nav class="navbar mt-3 ms-3">
        <div class="container-fluid ms-3 mt-3">
            <div class="navbar-header w-100">
               <ul class="nav navbar-nav w-100">
                    <li class="pb-4">
                        <a href="admin_dashboard.php" class="h6 text-decoration-none waves-effect text-light waves-light"><i class="fa fa-briefcase"></i> Dashborard</a>
                    </li>  
                    <li class="pb-4">
                        <a href="./registrationform.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-edit"></i> Register</a>
                    </li>
                    <li class="pb-4">
                        <a href="./viewemp.php" class="h6 text-decoration-none waves-effect waves-light text-light" name="logout"><i class="fa fa-group"></i> View Employees</a>
                    </li> 
                    <li class="pb-4">
                        <a href="./leavelist.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-drivers-license-o"></i> Manage Leave</a>
                    </li>
                    <li class="pb-4">
                        <a href="./logout.php" class="h6 text-decoration-none waves-effect waves-light text-light"><i class="fa fa-mail-reply"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>
</html>

