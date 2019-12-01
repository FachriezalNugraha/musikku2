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
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="height:58px; background-color: #76D7C4">
            <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/mysound.jpg" id="logo">Home Musik</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="input.php"> Tambahkan Lagu</a><a class="dropdown-item" role="presentation" href="tabel_lagu.php">Daftar lagu</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                    <a class="btn btn-light action-button" role="button" href="logoutadmin.php">Logout</a></span></div>
    </div>
    </nav>
    </div>
    <div style="height: auto;  width: auto; border-top-left-radius: 60px; border-top-right-radius: 60px; padding-left: 10px" class="form-input">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col" style="text-align: center;">Picture</th>
      <th scope="col">Nama Band</th>
      <th scope="col">Judul</th>
      <th colspan="4">Option</th>
    </tr>
  </thead>
<tbody>

<?php 
include "konek.php";

$query = "SELECT * FROM lagu1";
$sql = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_array($sql)) 
{
    ?>
    <tr>
      <th scope="row"><?php echo $data['id'];  ?></th>
      <td style="text-align: center;"><img src="<?php echo $data['logo']?>" width="40%"> </td>
      <td><?php echo $data['nama'];  ?></td>
      <td><?php echo $data['judul'];  ?></td>
      <td><a href= "hapus.php?id=<?php echo $data['id']?>"> Hapus </a></td>   
      <td><a href="edit.php?id=<?php echo $data['id']?>"> Edit </a>

    </tr>

 <?php
    }
 ?>
   
  </tbody>
</table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>