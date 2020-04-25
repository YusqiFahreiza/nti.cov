<?php  
include '../koneksi.php';

if (isset($_POST['simpan'])) 
{
	$id_odp 			= $_POST['id_odp'];
	$nama				= $_POST['nama'];
	$umur		 		= $_POST['umur'];
	$alamat 			= $_POST['alamat'];
	$suhu				= $_POST['suhu'];
	$id_status			= $_POST['id_status'];

	$sql =	"UPDATE odp SET nama='$nama', umur='$umur', alamat='$alamat', suhu='$suhu', id_status='$id_status' WHERE id_odp='$id_odp'";
			
	$res = mysqli_query($kon, $sql);
	$count = mysqli_affected_rows($kon);

	if ($res>0) {
		echo "
			<script>
				alert('Data Berhasil Diupdate');
				document.location.href='index.php';
			</script>
		";
	}
}
?>