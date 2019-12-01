<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:login.php?pesan=belum_login");
}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Musik</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="height:58px;">
            <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/mysound.jpg" id="logo">Home Musik</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                   class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="navbar-text actions"><a href="home1.php">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Jenis Lagu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="daftarlagu.php?kategori=Lagu Indonesia">Lagu Indonesia</a><a class="dropdown-item" role="presentation" href="daftarlagu.php?kategori=Lagu Luar">Lagu Luar</a><a class="dropdown-item" role="presentation" href="daftarlagu.php?kategori=Religi">Religi</a></div>
                        </li>
                        <a class="btn btn-light action-button" role="button" href="logout.php">Logout</a></span></div>
    </div>
    </nav>
    </div>
 <div style="height: auto;  width: auto; border-top-left-radius: 40px; border-top-right-radius: 20px; background-color: #76D7C4; padding-left: 10px" class="form-input">

    
    <div>
        <div class="container" id="lagu1">
            <?php
            $kategori = $_GET['kategori'];
             ?>
           <h4> <?php echo $kategori; ?>           
<?php 
include "konek.php";

$query = "SELECT * FROM lagu1 where kategori='$kategori'";
$sql = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_array($sql)) {
    ?>                
                    <div class="col-3" >
                    <div class="card"><img class="card-img-top w-100 d-block" style="width: 100px; height: 100px" src="<?php echo $data['logo']; ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="judul"><?php echo $data['judul']; ?></p>
                            <a class="btn btn-primary mb-2" role="button" href="<?php echo $data['alamat']; ?>">Dengarkan lagu</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
         </div>
    </div>
<footer id="myFooter">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1 class="logo" style="margin-top:30px;"><a href="#"><img src="assets/img/mysound.jpg" id="logofooter">&nbsp;</a></h1>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <ul>
                        <li><a href="daftarlagu.php?kategori=Lagu Indonesia">Lagu Indonesia</a></li>
                        <li><a href="daftarlagu.php?kategori=Lagu Luar">Lagu Luar<br></a></li>
                        <li><a href="daftarlagu.php?kategori=Religi">Religi</a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>