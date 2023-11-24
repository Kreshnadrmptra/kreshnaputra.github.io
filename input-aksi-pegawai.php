<?php
include "koneksi.php";

$id_pegawai= $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];

mysqli_query($koneksi, "INSERT INTO pegawai VALUES('$id_pegawai','$nama_pegawai','$jabatan','$gaji')");
header("location:pegawai.php");
?>