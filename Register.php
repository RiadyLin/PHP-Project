<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register.php</title>
</head>
<body>
<?php
require_once "db.php";

if (isset($_POST["id"]) && isset($_POST["nama"]) && isset($_POST["email"])) {
    $id  = $_POST["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    $conn = konek_db();

    $query = $conn->prepare("insert into profil(id, name, email) values(?, ?, ?)");
   
    $query->bind_param("iss",$id, $nama, $email);

    // jalankan query
    $result = $query->execute();
    if (! $result)
        die("<p>Proses query gagal.</p>");

    echo "<p>Data produk berhasil ditambahkan.</p>";
} else {
    echo "<p>Data produk belum diisi!</p>";
}
?>
</body>
</html>
