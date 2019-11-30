<?php 
	$hostname = "192.168.184.136";
	$username = "root";
	$password = "115";
	$db = "plexmusik";

	$koneksi = new mysqli($hostname, $username, $password, $db);

	if($koneksi->connect_error){
		die('Maaf Koneksi Gagal : '.$connect->connect_error);
	}
 ?>