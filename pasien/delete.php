<?php
include '../config/koneksi.php';

$id = $_GET['id'];
 
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
 
header("location:index.php");



//end Mahisa Taruna 161100008 
?>