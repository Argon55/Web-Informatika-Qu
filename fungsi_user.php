<?php
include"koneksi.php";
	
function register_user($namalengkap, $email, $password, $pendidikan, $sekolah, $whatsapp) {

	global $conn;

	$namalengkap = mysqli_real_escape_string($conn, $namalengkap);
	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);
	$pendidikan = mysqli_real_escape_string($conn, $pendidikan);
	$sekolah = mysqli_real_escape_string($conn, $sekolah);
	$whatsapp = mysqli_real_escape_string($conn, $whatsapp);

	$password = password_hash($password, PASSWORD_DEFAULT);
	$daftar = "INSERT INTO pengguna (namalengkap, email, password, pendidikan, sekolah, whatsapp) VALUES ('$namalengkap', '$email', '$password', '$pendidikan', '$sekolah', '$whatsapp')";

	if( mysqli_query($conn, $daftar) ) {
		return true;
	}else{
		return false;
	}
}


//menguji nama kembar
function register_cek_nama($namalengkap) {
	global $conn;

	$namalengkap = mysqli_real_escape_string($conn, $namalengkap);

	$pilih = "SELECT * FROM pengguna WHERE namalengkap = '$namalengkap'";

	if ( $result = mysqli_query($conn, $pilih) ) {
		if (mysqli_num_rows($result) == 0) return true;
		else return false;
	}
}


//menguji nama didatabase
function login_cek_nama($email) {
	global $conn;

	$email = mysqli_real_escape_string($conn, $email);

	$pilih = "SELECT * FROM pengguna WHERE email = '$email'";

	if ( $result = mysqli_query($conn, $pilih) ) {	
		if (mysqli_num_rows($result) != 0) return true;
		else return false;
	}
}


//cek data
function cek_data ($email, $password) {
	global $conn;

	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);

	$query = "SELECT password FROM pengguna WHERE email = '$email' ";
	$result = mysqli_query($conn, $query);
	$hash = mysqli_fetch_assoc($result)['password'];

	if (password_verify($password, $hash)) {
		return true;
	}else {
		return false;
	}
}


// menguji status user

function cek_status($email) {
	global $conn;

	$email = mysqli_real_escape_string($conn, $email);

	$query = "SELECT level FROM pengguna WHERE email='$email'";

	$result = mysqli_query($conn, $query);
	$status = mysqli_fetch_assoc($result)['level'];

	return $status;
}

?>


