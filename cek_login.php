<?php
session_start();
$query=new mysqli('localhost', 'root', '', 'plexmusik');
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($query, "SELECT * FROM user WHERE username='$username' and pass='$password'")
		or die(mysqli_error($query));

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home1.php");
} else {
	header("location:login.php?pesan=gagal");
}
?>