<?php
session_start();
$query=new mysqli('192.168.184.136', 'root', '115', 'plexmusik');
$username = $_POST['username'];
$password = $_POST['password'];

if ($query -> connect_errno)
{
	echo "Failed to connect to MySQL: " . $query -> connect_error;
}
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