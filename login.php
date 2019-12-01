<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musik</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5"><img src="assets/img/mysound.jpg" class="logologin" style="max-width:-17px;min-width:0px;width:224px;"></h2>
<?php
 if(isset($_GET['pesan']))
        {
if($_GET['pesan']== "gagal")
{
    echo "Login Gagal! username dan password salah!";
} else if($_GET['pesan'] == "logout")
{
    echo "Anda Telah Berhasil Logout";
} else if ($_GET['pesan'] == "belum_login")
{
    echo "Anda harus login untuk akses halaman admin";

}}

    ?>
                    <form method="post" action="cek_login.php">
                        <div class="form-group"><label class="text-secondary">Username</label><input class="form-control" type="text" required=""  name="username"></div>
                        <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" type="password" required="" name="password"></div><button class="btn btn-success btn-block mt-2" type="submit">Log In</button></form>
                    <p class="pemisah"><span style="text-decoration: line-through;"></span> or&nbsp;<span style="text-decoration: line-through;"></span></p>
                    <button
                        class="btn btn-info btn-block" type="button" id="btndaftar" ><a href="signup.php">Sign Up</a></button>
                    <p class="pemisah"><span style="text-decoration: line-through;"></span> or&nbsp;<span style="text-decoration: line-through;"></span></p>
                    <button
                        class="btn btn-info btn-block" type="button" id="btndaftar" ><a href="loginadmin.php">Login Admin</a></button>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0 d-flex align-items-lg-center" id="bg-block" style="background-color: #9FD6FF;"><img src="assets/img/myhappymusic.jpg" class="gblogin">
                <p class="ml-auto small text-dark mb-2"></p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>