<?php 
session_start();
if ($_SESSION['username']=='') 
{
	header("location:../index.php");
}?>

<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_odp = $_GET['id_odp'];

$sql = "SELECT * FROM odp INNER JOIN status ON odp.id_status = status.id_status where id_odp = '$id_odp'";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Pasien</h2>
			<hr class="bg-light">
			<table>
				<table class="table table-bordered">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Umur</strong></td>
						<td width="500px"><?= $detail['umur'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Alamat</strong></td>
						<td width="500px"><?= $detail['alamat'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Suhu Tubuh</strong></td>
						<td width="500px"><?= $detail['suhu'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Status</strong></td>
						<td width="500px"><?= $detail['status'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
					    	<a href="edit.php?id_odp=<?= $detail['id_odp']; ?>" class="badge badge-warning">Update</a>
					    	<a href="hapus.php?id_odp=<?= $detail['id_odp']; ?>" class="badge badge-danger">Hapus</a>
					    </td>
					</tr>
				</table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>