<?php
include 'aset/header2.php';
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
						<h2 class="card-title"><i class="fas fas fa-user-md"></i> login</h2>
					</div>
					<div class="card-body">

					<form action="cek_login.php" method="post" >

					<table class="table">
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input type="text" name="username" placeholder="user & pass : admin" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="password" name="password" required></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" class="btn btn-primary" value="login"></td>
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
include 'aset/footer.php';
?>

