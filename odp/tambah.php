<?php  
session_start();
if ($_SESSION['username']=='') 
{
	header("location:../index.php");
}
?>

<?php 
include '../koneksi.php';

$query = mysqli_query($kon, ("SELECT * FROM status"));
?>

<?php
include '../aset/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>nti.cov</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%;">
					<div class="card-header" style="width: 100%;">
						<h2 class="card-title"><i class="fas fas fa-plus"></i> Tambah Data Pasien</h2>
					</div>
					<div class="card-body">

					<form action="proses-tambah.php" method="post">

					<table class="table">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" required></td>
						</tr>
						<tr>
							<td>Umur</td>
							<td><input type="number" name="umur" required></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" required></td>
						</tr>
						<tr>
							<td>Suhu Tubuh</td>
							<td><input type="number" name="suhu" required></td>
						</tr>
							<td>Status</td>
							<td>
								<select style="width: 200px" name="id_status">
									
									<option value="">-- Pilih Status --</option>

									<?php  

										while ($status = mysqli_fetch_assoc($query)):

									?>

									<option value="<?php echo $status['id_status']; ?>"><?php echo $status['status']; ?></option>

									<?php 
										endwhile;
									?>

								</select>
							</td>
						</tr>
						<tr>
							<th></th>
							<td><input type="submit" class="btn btn-primary" name="simpan" value="tambah"></td>
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