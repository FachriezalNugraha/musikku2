<?php
include "konek.php";
$username= $_POST['username'];
$password= $_POST['password'];

$query =mysqli_query($koneksi,"Insert into admin values('$username', '$password')") or die(mysqli_error($koneksi));

	if($query)
	{
	echo "<script>alert('Login Please'); window.location='loginadmin.php'</script>";

}
else{ echo "<script>alert('Try Another Username')</script>";}


  ?>