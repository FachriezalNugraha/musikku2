<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME MUSIK</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php
 if(isset($_GET['pesan']))
        {
if($_GET['pesan']== "gagal")
{
    echo "<script>alert('Login Failed! Username and Password incorrect'); window.location='loginadmin.php'</script>";
    } else if($_GET['pesan'] == "logout")
{
    echo "<script>alert('Logout Successed!'); window.location='loginadmin.php'</script>";
} else if ($_GET['pesan'] == "belum_login")
{
    echo "<script>alert('Login Fisrt to Continue!'); window.location='loginadmin.php'</script>";
    

}}

    ?>


    <div class="register-photo">
        <div class="form-container">
          
            <form method="post" action="cek_admin.php">
                <h2 class="text-center"><strong>Login</strong> admin.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-success btn-block" type="submit">Login</button></div>
            <p class="pemisah"><span style="text-decoration: line-through;"></span>or&nbsp;<span style="text-decoration: line-through;"></span></p>
                <a class="btn btn-primary btn-block" role="button" href="signupadmin.php" style="background-color: #28B463">Sign Up</a>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>