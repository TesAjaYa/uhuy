<?php
include 'config.php';
// if ($_POST) {
// 	if($_POST['username'] == 'admin'){
// 		header("location:tampil.php");
// 		if($_POST['password'] == '123'){
// 			header("location:tampil.php");
// 		}else{
// 			echo "gagal";	
// 		}
// 	}else{
// 		echo "gagal";
// 	}
// }
if ($_POST) {
	if (isset($_POST['submit'])) {
		if ($_POST['username'] == false) {
			header("location:index.php");
			echo "Username Tidak Boleh Kosong";
			if ($_POST['Password'] == 0) {
				header("location:index.php");
				echo "Password Tidak Boleh Kosong";
			} else {
				header("location:tampil.php");
			}
		} else {
			header("location:tampil.php");
		}
	} else {
		echo "Ada error";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>

<body>
	<center>
		<form action="tampil.php" method="post">
			<table border="1">
				<tr>
					<td colspan="2" style="text-align: center;">Data Pengguna Pintar</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" placeholder="Masukan username" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" placeholder="masukan Password" name="Password"></td>
				</tr>
				<tr>
					<td colspan="2">
						<center><button type="submit" name="submit">Login</button></center>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>