<?php  
include '../koneksi.php';

if (isset($_POST['simpan'])) 
{
	$nama 		= $_POST['nama'];
	$umur	 	= $_POST['umur'];
	$alamat 	= $_POST['alamat'];
	$suhu	 	= $_POST['suhu'];
	$wkwk 		= $_POST['id_status'];

	$query =mysqli_query($kon, "INSERT INTO odp (nama, umur, alamat, suhu, id_status)
			VALUES ('$nama', '$umur', '$alamat', '$suhu', '$wkwk')");
	if ($query>0) {
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}
}
?>