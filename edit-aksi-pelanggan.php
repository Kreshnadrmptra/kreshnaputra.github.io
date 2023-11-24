<?php
include 'koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi,"UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan',
alamat='$alamat',telepon='$telepon' WHERE id_pelanggan='$id_pelanggan'");
header("location: pelanggan.php"); 

?>