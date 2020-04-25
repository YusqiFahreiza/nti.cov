<?php  
session_start();
if ($_SESSION['username']=='') 
{
	header("location:../index.php");
}
?>

<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_odp = $_GET["id_odp"];
$query = mysqli_query($kon, "SELECT * FROM odp INNER JOIN status ON odp.id_status = status.id_status WHERE id_odp='$id_odp'");
$odp = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>nti.con</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%;">
					<div class="card-header" style="width: 100%;">
						<h2 class="card-title"><i class="fas fas fa-arrow-up"></i> Update Data Pasien</h2>
					</div>
					<div class="card-body">

					<form action="proses-edit.php" method="post">

					<table class="table">
						<input type="hidden" name="id_odp" value="<?= $odp['id_odp']; ?>">
						<tr>
							<td>Nama</td>
							<td><input style="width:100%" type="text" name="nama" value="<?= $odp['nama']; ?>" required></td>
						</tr>
						<tr>
							<td>Umur</td>
							<td><input style="width:100%" type="number" name="umur" value="<?= $odp['umur']; ?>" required></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input style="width:100%" type="text" name="alamat" value="<?= $odp['alamat']; ?>" required></td>
						</tr>
						<tr>
							<td>Suhu Tubuh</td>
							<td><input style="width:100%" type="suhu" name="suhu" value="<?= $odp['suhu']; ?>" required></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>
								<select style="width:100%" name="id_status" required>
									
										<?php  
											$query = mysqli_query($kon, "SELECT * FROM odp INNER JOIN status ON odp.id_status = status.id_status WHERE id_odp=$id_odp");
											while ($query_status = mysqli_fetch_assoc($query)){ ;
										?>
												<option value="<?php echo $query_status['id_status']; ?>">
													<?php echo $query_status['status'] ?>
												</option>
										<?php }; ?>
								</select>
							</td>
						</tr>
						<tr>
							<th></th>
							<th><button style="width:15%; height: 40px" type="submit" class="btn btn-primary" name="simpan">update</button>
							</th>
						</tr>
					</table>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
include '../aset/footer.php';
?>