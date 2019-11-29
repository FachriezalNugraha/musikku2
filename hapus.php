<?php
include "konek.php";

$id=$_GET['id'];

$query=mysqli_query($koneksi,"DELETE FROM `lagu1` WHERE `lagu1`.`id` = '$id'");

if($query){
	echo "<script>alert('Data Terhapus'); window.location='tabel_lagu.php';</script> ";
}
else{
	echo "<script>alert('Data Gagal Terhapus'); window.location='tabelmenu.php';</script> ";
}