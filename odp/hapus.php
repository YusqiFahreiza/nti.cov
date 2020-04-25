<?php  
include '../koneksi.php';

$id = $_GET["id_odp"];

	$query = "DELETE FROM odp WHERE id_odp='$id' ";
	$odp = mysqli_query($kon, $query);

	if (!$odp) {
		die ("Gagal menghapus data: ".mysqli_errno($connect)." - ".mysqli_error($connect));
	}else{
		echo "<script>alert('Data Berhasil Dihapus');window.location='index.php';</script>";
	}

?>