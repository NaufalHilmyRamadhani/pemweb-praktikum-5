<?php
try {
$dsn = "mysql:host=localhost;dbname=kampus";
$username = "root";
$password = "";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $username, $password, $options);
echo "Koneksi berhasil!";
} catch (PDOException $e) {
echo "Koneksi gagal: " . $e->getMessage();
}
?>