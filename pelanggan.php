<html>
<head>
        <link rel="stylesheet" href="styletable.css">
        <link rel="stylesheet" type="text/css" href="styledashboard.css">
    </head>
    <div class="main">
	<div class="navbar">
		<label class="logo">Hotel KKK</label>
		<ul>
			<li><a href="dashboard.html">Home</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pelanggan.php">Pengunjung</a></li>
		</ul>
	</div>
	<div class="content">
       <b><h3>Tabel Pelanggan</h3></b>
        <table border="1">
    <tr>
        <th>id_pelanggan</th>
        <th>nama_pelanggan</th>
        <th>alamat</th>
        <th>telepon</th>
        <th>aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM pelanggan");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr class="isi">
        <td> <?php echo $tampil['id_pelanggan'] ?></td>
        <td> <?php echo $tampil['nama_pelanggan'] ?></td>
        <td> <?php echo $tampil['alamat'] ?></td>
        <td> <?php echo $tampil['telepon'] ?></td>
        <td> <a class="action-button2" href="hapus-pelanggan.php?id_pelanggan=<?php echo $tampil ['id_pelanggan']; ?>">Hapus</a>
        <a  class="action-button1" href="edit-pelanggan.php?id_pelanggan=<?php echo $tampil ['id_pelanggan']; ?>">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
<a href="input-pelanggan.php">Tambahkan Data Baru</a>
</html>