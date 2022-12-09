<?php
    if(isset($_POST['btnLogin'])){
        header("location:Store.php");
    }

    if(isset($_POST['btnRegister'])){
        header("location:registration.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <title>ArmYourSelf | Online Shop</title>
</head>
<body>
    <form method="post">
        <div class="sidenav">
            <div class="login-main-text">
                <h2><i class="fa-solid fa-gun"></i>ArmYourSelf<br> Login Page</h2>
                <p>Login or register from here to access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-black" name="btnLogin">Login</button>
                        <button type="submit" class="btn btn-secondary" name="btnRegister">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>