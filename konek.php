<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "plexmusik";

	$koneksi = new mysqli($hostname, $username, $password, $db);

	if($koneksi->connect_error){
		die('Maaf Koneksi Gagal : '.$connect->connect_error);
	}
 ?>