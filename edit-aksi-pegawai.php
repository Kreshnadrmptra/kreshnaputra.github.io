<?php
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];

mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai',
jabatan='$jabatan',gaji='$gaji' WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php"); 

?>