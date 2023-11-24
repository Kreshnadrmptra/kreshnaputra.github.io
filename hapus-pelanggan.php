<?php
include "koneksi.php";

$id_pelanggan = $_GET['id_pelanggan'];
 
mysqli_query($koneksi,"DELETE FROM pelanggan where id_pelanggan='$id_pelanggan'");
header("location:pelanggan.php");
?>