<form action="create.php" method="POST">
NPM: <input type="text" name="npm"><br>
Nama: <input type="text" name="nama"><br>
Jurusan: <input type="text" name="jurusan"><br>
<input type="submit" name="submit" value="Tambah Data">
</form>
<?php

include 'koneksi mysqli.php';
if(isset($_POST['submit'])){
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$query = "INSERT INTO mahasiswa (npm, nama, jurusan) VALUES ('$npm',
'$nama', '$jurusan')";
mysqli_query($koneksi, $query);
echo "Data berhasil ditambahkan.";
}
?>