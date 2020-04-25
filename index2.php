<?php  
session_start();
if ($_SESSION['username']=='') 
{
	header("location:index.php");
}
?>

<?php
include 'aset/header.php';
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
				<div class="card" style="width: 20%;">
					<div class="card-header" style="width: 100%;">
						<h2 class="card-title"><i class="fas fas fa-hand-paper"></i> halo admin</h2>
					</div>
					<div class="card-body">
					<table class="table">
						<tr>
							<th><center>halo admin, silahkan menyunting data pasien.</center></th>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
include 'aset/footer.php';
?>



