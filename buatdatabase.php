<!--sebagai deklarasi script php-->
<?php
	//sebagai deklarasi variabel untuk nama server, username, dan password
	$servername ="localhost";
	$username = "root";
	$password = "";

	//script untuk membuka koneksi ke MySQL
	$conn = mysqli_connect($servername,$username,$password);
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	// script untuk membuat database
	$sql = "CREATE DATABASE myDB";
	//script untuk menguji berhasil / gagal membuat database
	if (mysqli_query($conn, $sql)) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: ".mysqli_error($conn);
	}
	mysqli_close($conn);
?>