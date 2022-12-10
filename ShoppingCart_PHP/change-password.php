<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin-panel.css">
    <title>ArmYourSelf | Dashboard</title>
</head>
<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-gun"></i>
                    ArmYourSelf
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">           
                <li class="dropdown">
                    <a href="#" class="" data-toggle="dropdown">Hello, Admin!</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php" ><i class="fa-solid fa-chart-line"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="#" ><i class="fa-solid fa-gear"></i>  Change Password</a>
                    </li>
                    <li>
                        <a href="investigaciones/favoritas"><i class="fa-solid fa-store"></i>Products</a>
                    </li>
                    <li>
                        <a href="sugerencias"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <form method="post">
                            <label for="extpassword">Exisitng Password:</label>
                            <input type="text" name="extpassword" placeholder="Existing Password"><br>
                            <label for="newpassword">New Password:</label>
                            <input type="text" name="newpassword" placeholder="New Password"><br>
                            <label for="confirmpassword">Confirm Password:</label>
                            <input type="text" name="confirmpassword" placeholder="Confirm Password"><br>
                            <input type="button" value="Save Changes">
                        </form>
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>