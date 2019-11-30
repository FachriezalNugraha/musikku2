<?php 
	$hostname = "192.168.184.136";
	$username = "fachriezal";
	$password = "123";
	$db = "plexmusik";

	$koneksi = new mysqli($hostname, $username, $password, $db);

	if($koneksi->connect_error){
		die('Maaf Koneksi Gagal : '.$connect->connect_error);
	}
 ?>