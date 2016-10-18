<?php
	require_once "db.php"	;

	$conn = konek_db();
        $id = $_GET('id');
	$nama = $_GET['nama'];
	$email = $_GET['email'];
	$query = mysqli_query($conn, "insert into produk(id,nama,email) values('" . $id . "','" . $nama . "', '" . $email . "')");
?>