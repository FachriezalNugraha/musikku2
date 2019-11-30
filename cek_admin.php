<?php
session_start();
$query=new mysqli('192.168.184.136', 'root', '115', 'plexmusik');
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($query, "SELECT * FROM admin WHERE admin='$username' and pass='$password'")
		or die(mysqli_error($query));

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	http_redirect("192.168.184.136/musikku2/input.php");
} else {
	http_redirect("192.168.184.136/musikku2/loginadmin.php?pesan=gagal");
}
?>