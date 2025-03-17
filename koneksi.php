<?php

	$server ="localhost";
	$username = "root";
	$password = "";
	$database = "pemilihan_pts";


	try {
    //create PDO connection
    $db = new PDO("mysql:host=$server;dbname=$database", $username, $password);
	} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
	}

	$conn = mysqli_connect($server,$username,$password,$database, 3306);

	if (!$conn) {
		die("Koneksi Gagal : " . mysqli_connect_erorr());
	} else {
		echo "";
	}
?>