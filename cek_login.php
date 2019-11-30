<?php
session_start();
$query=new mysqli('192.168.184.136', 'fachriezal', '123', 'plexmusik');
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
	http_redirect("192.168.184.136/musikku2/home1.php");
} else {
	http_redirect("192.168.184.136/musikku2/login.php?pesan=gagal");
}
?>