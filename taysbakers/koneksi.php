<?php
	$server		= "35.247.129.203"; //sesuaikan dengan nama server
	$user		= "yosuatest"; //sesuaikan username
	$password	= "test123"; //sesuaikan password
	$database	= "techtest"; //sesuaikan target databese

	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}

?>