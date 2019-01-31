<?php
include_once "koneksi.php";

	class usr{}

	
	$username = $_POST["username"];
	$lat = $_POST["lat"];
	$lng = $_POST["lng"];
	
	$query = mysqli_query($con, "INSERT INTO absen (id, username, location) VALUES(0,'".$username."','".$lat.", ".$lng."')");

				if ($query){
					$response = new usr();
					$response->success = 1;
					$response->message = "Absen Berhasil.";
					die(json_encode($response));

				} else {
					$response = new usr();
					$response->success = 0;
					$response->message = "Absen Gagal";
					die(json_encode($response));
				}
	mysqli_close($con);
?>