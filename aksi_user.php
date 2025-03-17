<?php
	
require_once "koneksi.php";
require_once "fungsi_user.php";


	if ( isset($_POST['bsimpan'])) {
  		$namalengkap =  $_POST['tnamalengkap'];
  		$username = $_POST['tusername'];
  		$password = $_POST['tpass'];
  		$sekolah = $_POST['tsekolah'];
  		$alamat = $_POST['talamat'];
  		$status = $_POST['tstatus'];

  		if (register_cek_nama($namalengkap) ) {
  			
  			// menambahkan data kedalam database
  			if (tambah_user($namalengkap, $username, $password, $sekolah, $alamat, $status) ) {
			echo "<script>
					alert('Simpan data SUKSES!');
					document.location='data_users.php';
				  </script>";
	        } else {
	        echo "<script>
					alert('Simpan data GAGAL!');
					document.location='data_users.php';
				  </script>";
	        }
	    } else {
	    echo "<script>
			alert('Nama sudah ada, SILAHKAN GANTI NAMA LAIN!');
			document.location='data_users.php';
			  </script>";
	    }
	}    


	// uji tombol Edit
	if(isset($_POST['bedit'])){

		// persiapan edit data
		$edit = mysqli_query($conn, "UPDATE pengguna SET namalengkap ='$_POST[tnamalengkap]', username ='$_POST[tusername]', email = '$_POST[temail]', sekolah = '$_POST[tsekolah]', alamat = '$_POST[talamat]', level = '$_POST[tstatus]' WHERE id = '$_POST[id]' ");

		// jika Edit sukses
		if ($edit) {
			echo "<script>
					alert('Edit data SUKSES!');
					document.location='data_user.php';
				  </script>";
		} else {
			echo "<script>
					alert('Edit data GAGAL!');
					document.location='data_user.php';
				  </script>";
		}
	}



	// uji tombol delete
	if(isset($_POST['bdelete'])){

		// persiapan delete data
		$delete = mysqli_query($conn, "DELETE FROM pengguna WHERE id = '$_POST[id]' ");

		// jika delete sukses
		if ($delete) {
			echo "<script>
					alert('Delete data SUKSES!');
					document.location='data_user.php';
				  </script>";
		} else {
			echo "<script>
					alert('Delete data GAGAL!');
					document.location='data_user.php';
				  </script>";
		}
	}