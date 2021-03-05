<?php
include '../config/koneksi.php';
// menyimpan data kedalam variabel
$name            = $_POST['name'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$umur        = $_POST['umur'];
$tanggal  = $_POST['tanggal'];
$role_id        = $_POST['role_id'];
// query SQL untuk insert data
$query="INSERT INTO user SET name='$name',jenis_kelamin='$jenis_kelamin',umur='$umur',tanggal='$tanggal', role_id='$role_id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>