<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
		<?php
			//script untuk membuka koneksi ke MySQL
			$conn = mysqli_connect("localhost","root","","mysql");

			//script untuk cek koneksi
			if (mysqli_connect_error()) {
				echo "Failed to connect to MySQL ".mysqli_connect_error();
				exit();
			} else {
				echo "Sudah Connect";
			}
		?>
</body>
</html>