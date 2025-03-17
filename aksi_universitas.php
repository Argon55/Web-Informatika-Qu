<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["bsimpan"])){
		$nama       = $_POST["tnama"];
		$akreditasi = $_POST["takreditasi"];
		$beasiswa   = $_POST["tbeasiswa"];
		$biaya      = $_POST["tbiaya"];
		$fasilitas  = $_POST["tfasilitas"];
		
		$akreditasi_c1 = $beasiswa_c2 = $biaya_c3 = $fasilitas_c4 = 0;

		if($akreditasi == "Baik/C"){
			$akreditasi_c1 = 1;
		}
		elseif($akreditasi == "Baik Sekali/B"){
			$akreditasi_c1 = 3;
		}
		elseif($akreditasi == "Unggul/A"){
			$akreditasi_c1 = 5;
		}


		if($beasiswa <= 5){
			$beasiswa_c2 = 1;
		}
		elseif($beasiswa >= 6 && $beasiswa <= 8){
			$beasiswa_c2 = 2;
		}
		elseif($beasiswa >= 9 && $beasiswa <= 11){
			$beasiswa_c2 = 3;
		}
		elseif($beasiswa >= 12 && $beasiswa <= 15){
			$beasiswa_c2 = 4;
		}
		elseif($beasiswa > 15){
			$beasiswa_c2 = 5;
		}
		


		if($biaya < 6999999){
			$biaya_c3 = 5;
		} 
		elseif($biaya >= 7000000 && $biaya <= 9999999){
			$biaya_c3 = 4;
		}
		elseif($biaya >= 10000000 && $biaya <= 12999999){
			$biaya_c3 = 3;
		}
		elseif($biaya >= 13000000 && $biaya <= 15999999){
			$biaya_c3 = 2;
		}
		elseif($biaya > 15000000){
			$biaya_c3 = 1;
		}


		if($fasilitas == "Cukup/Standart"){
			$fasilitas_c4 = 1;
		}
		elseif($fasilitas == "Lengkap"){
			$fasilitas_c4 = 3;
		}
		elseif($fasilitas == "Sangat Lengkap"){
			$fasilitas_c4 = 5;
		}


		$sql = "INSERT INTO `universitas` (`id`, `nama`, `akreditasi`, `beasiswa`, `biaya`, `fasilitas`, `c1`, `c2`, `c3`, `c4`) 
				VALUES (NULL, :nama, :akreditasi, :beasiswa, :biaya, :fasilitas, :c1, :c2, :c3, :c4)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama', $nama);
		$stmt->bindValue(':akreditasi', $akreditasi);
		$stmt->bindValue(':beasiswa', $beasiswa);
		$stmt->bindValue(':biaya', $biaya);
		$stmt->bindValue(':fasilitas', $fasilitas);
		$stmt->bindValue(':c1', $akreditasi_c1);
		$stmt->bindValue(':c2', $beasiswa_c2);
		$stmt->bindValue(':c3', $biaya_c3);
		$stmt->bindValue(':c4', $fasilitas_c4);
		$stmt->execute();

		if ($sql) {
			echo "<script>
					alert('Simpan data SUKSES!');
					document.location='data_universitas.php';
				  </script>";
		} else {
			echo "<script>
					alert('Simpan data GAGAL!');
					document.location='data_universitas.php';
				  </script>";
		}
	}


	// uji tombol Edit
	if(isset($_POST['bedit'])){

		// persiapan edit data
		$edit = mysqli_query($conn, "UPDATE universitas SET nama = '$_POST[tnama]', akreditasi = '$_POST[takreditasi]', beasiswa = '$_POST[tbeasiswa]', biaya = '$_POST[tbiaya]', fasilitas = '$_POST[tfasilitas]' WHERE id = '$_POST[id]' ");

		// jika Edit sukses
		if ($edit) {
			echo "<script>
					alert('Edit data SUKSES!');
					document.location='data_universitas.php';
				  </script>";
		} else {
			echo "<script>
					alert('Edit data GAGAL!');
					document.location='data_universitas.php';
				  </script>";
		}
	}



	// uji tombol delete
	if(isset($_POST['bdelete'])){

		// persiapan delete data
		$delete = mysqli_query($conn, "DELETE FROM universitas WHERE id = '$_POST[id]' ");

		// jika delete sukses
		if ($delete) {
			echo "<script>
					alert('Delete data SUKSES!');
					document.location='data_universitas.php';
				  </script>";
		} else {
			echo "<script>
					alert('Delete data GAGAL!');
					document.location='data_universitas.php';
				  </script>";
		}
	}


	// uji tombol delete
	if(isset($_POST['deleteuser'])){

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