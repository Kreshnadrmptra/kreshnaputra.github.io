<?php
include "koneksi.php";

$id_pelanggan= $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('$id_pelanggan','$nama_pelanggan','$alamat','$telepon')");
header("location:pelanggan.php");
?>