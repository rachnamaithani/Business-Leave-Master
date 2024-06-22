<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        body{
            overflow: hidden;
        }
    </script>
</head>   
<body>
    <section class="">
        <div class="row">
            <?php require("sidenavbar/side-navbar.php");?>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding:0;background:#d0d6ffd1;">
                <div id="menu" class="pe-5" style="padding:18px;background:#9837d8;">
                    <form method="post">
                        <i class="fa fa-bars" style="font-size: 25px;"></i>
                        <img src="images/admin.png" height="50px" width="50px" class="pull-right" alt="adminimg" style="border-radius:34px; margin:-10px;background-color:yellow; padding: 5px;">
                        <i class=" me-4 mt-2 pull-right fa fa-bell-o" style="font-size: 24px;">  Admin</i>
                    </form>
                </div> 
                <div class="text-center">
                    <div style="font-size:80px;color:#8a8aff;">WELCOME TO ADMIN PANEL</div>
                </div>
            </div>
    </section>
</body>
</html>