<?php

require_once "init.php";

if ( !isset($_SESSION['email'])) {
	header('location: login.php');
}

?>

<?php if ( cek_status($_SESSION['email']) == 1) { 
	header('location:dashboard_admin.php');
 } else {
 	header('location:dashboard_user.php');
 } 
?>
<a href="logout.php">keluar</a>