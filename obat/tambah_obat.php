<?php
include '../config/koneksi.php';
// menyimpan data kedalam variabel
$name            = $_POST['name'];
$jenis_obat  = $_POST['jenis_obat'];
$tanggal  = $_POST['tanggal'];
// query SQL untuk insert data
$query="INSERT INTO obat SET name='$name',jenis_obat='$jenis_obat',tanggal='$tanggal'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>