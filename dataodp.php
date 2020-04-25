<?php  
session_start();
if ($_SESSION['username']=='') 
{
	header("location:index.php");
}
?>

<?php
include 'koneksi.php';
include 'aset/header.php';
$sql = "SELECT * FROM odp INNER JOIN status ON odp.id_status=status.id_status";

$res = mysqli_query($kon, $sql);

$odp = array();

while ($data = mysqli_fetch_assoc($res)) {
  $odp[] = $data;
}
?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  				<div class="card-header">
  					<h2 class="card-title"> <i class="fas fa-users"></i> Data Pasien</h2>
  				</div>
  				<div class="card-body">
   					<table class="table table-striped">
					  <thead>
					    <tr>
					      	<th scope="col">No</th>
					      	<th scope="col">Nama</th>
					      	<th scope="col">Umur</th>
					      	<th scope="col">Alamat</th>
					      	<th scope="col">Suhu Tubuh</th>
					      	<th scope="col">Status</th>				      
					    </tr>
					  </thead>
						<?php
						$no = 1;
						foreach ($odp as $p) { ?>
							<tr>
								<th scope="row"><?= $no ?></th>
								<td><?= $p['nama'] ?></td>
								<td><?= $p['umur'] ?></td>
								<td><?= $p['alamat'] ?></td>
								<td><?= $p['suhu'] ?></td>
								<td><?= $p['status']; ?></td>
							</tr>
						<?php
							$no++;
						}
						?>
						</tbody>
					</table>
	  			</div>
			</div>

<?php 
include 'aset/footer.php';
?>
