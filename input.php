<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:loginadmin.php?pesan=belum_login");
}

?>

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
    <link rel="stylesheet" href="assets/css/util.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> 
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="height:58px;">
            <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/mysound.jpg" id="logo">HOME MUSIK</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="input.php">Tambahkan Lagu</a><a class="dropdown-item" role="presentation" href="tabel_lagu.php">Daftar lagu</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                   <a class="btn btn-light action-button" role="button" href="logoutadmin.php">Logout</a></span></div>
              
    </div>
    </nav>
    </div>
    <div style="height: 450px;  width: auto; border-top-left-radius: 60px; border-top-right-radius: 60px; padding-left: 10px" background-color: #76D7C4" class="form-input">
<center>
        <form method="POST" class="contact1-form validate-form" action="upload.php" enctype="multipart/form-data">
          <span class="contact1-form-title">
       Tambahkan lagu
        </span>

        <div class="wrap-input1 validate-input" data-validate = "ID Band is required">
          <input class="input1" type="text" name="id" placeholder="ID Band">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input">
          <input class="input1" type="file" name="foto">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Nama Band is required">
          <input class="input1" type="text" name="nama" placeholder="Nama Band">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Judul lagu is required">
          <input class="input1" name="judul" placeholder="Judul Lagu"></input>
          <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input" data-validate = "Link file is required">
          <input class="input1" name="alamat" placeholder="Link file"></input>
          <span class="shadow-input1"></span>
        </div>
        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </center>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>