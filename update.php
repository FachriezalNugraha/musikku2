<?php
include "konek.php";
$id= $_POST['id'];
$nama= $_POST['nama'];
$judul= $_POST['judul'];
$alamat= $_POST['alamat'];
$kategori= $_POST['kategori'];
$logo='gambar/'.$_FILES['foto']['name'];
$logo=mysqli_real_escape_string($koneksi,$logo);

 $sql="UPDATE lagu1 SET id='$id', logo='$logo', nama='$nama',judul='$judul', kategori='$kategori', alamat='$alamat' where id='$id'";
    if(mysqli_query($koneksi,$sql)){
       // $result="Berhasil";
        echo "<script>alert('Data Tersimpan'); window.location='input.php'</script>";
    }
    else{
        //$result="gagal";
        echo "<script>alert('Data Tidak Tersimpan')</script>";
    }

// if(copy($_FILES['foto']['tmp_name'], $logo)){
//     $sql="UPDATE lagu1 SET id='$id', gambar='$logo', nama='$nama',judul='$judul', kategori='$kategori', alamat='$alamat' where id='$id'";
//     if(mysqli_query($koneksi,$sql)){
//        // $result="Berhasil";
//         echo "<script>alert('Data Tersimpan'); window.location='input.php'</script>";
//     }
//     else{
//         //$result="gagal";
//         echo "<script>alert('Data Tidak Tersimpan')</script>";
//     }
// }
// else{
//    // $result="gagal upload";
//     echo "<script>alert('Data Tidak Tersimpan')</script>";
// }

// if(preg_match("!logo!", $_FILES['foto']['type'])){
//     if(copy($_FILES['foto']['tmp_name'], $logo)){
//         $sql="UPDATE lagu1 SET id='$id', gambar='$logo', nama='$nama',judul='$judul', kategori='$kategori', alamat='$alamat' where id='$id'";
//         if(mysqli_query($koneksi,$sql)){
//            // $result="Berhasil";
//             echo "<script>alert('Data Tersimpan'); window.location='input.php'</script>";
//         }
//         else{
//             //$result="gagal";
//             echo "<script>alert('Data Tidak Tersimpan')</script>";
//         }
//     }
//     else{
//        // $result="gagal upload";
//         echo "<script>alert('Data Tidak Tersimpan')</script>";
//     }
// }
// else{
//     //$result="only upload jpg";
//     echo "<script>alert('Only Upload Photos!')</script>";
// }

mysqli_close($koneksi);



  ?>
