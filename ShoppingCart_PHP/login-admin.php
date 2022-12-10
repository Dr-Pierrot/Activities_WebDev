<?php
    if(isset($_POST['btnLogin'])){
        if($_POST['username']== "admin" && $_POST['password']=="admin"){
            header("location:dashboard.php");
        }else{
            echo "invalid password|!";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login-admin.css">
    <title>Registration</title>
</head>
<body>
    <form method="post">
        <div class="dialog mt-5">
            <h1><i class="fa-solid fa-gun"></i>ArmYourSelf</h1>
            <input id="username" name="username" type="text" placeholder="User Name"><br>
            <input id="password" name="password" type="password" placeholder="Password"><br>
            <button id="btnLogin" name="btnLogin" type="submit">Login</button>
            <a href="store.php" class="btn btn-dark col-12 border mt-1 rounded-pill">Cancel</a>
        </div>
        
    </form>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>