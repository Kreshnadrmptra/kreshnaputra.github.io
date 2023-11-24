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
    <b>Tabel Reservasi </b>
    <table border="1">
    <tr>
        <th>ID Reservasi</th>
        <th>ID Kamar</th>
        <th>ID Pelanggan</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM reservasi");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr class="isi">
        <td> <?php echo $tampil['id_reservasi'] ?></td>
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <?php echo $tampil['id_pelanggan'] ?></td>
        <td> <?php echo $tampil['tgl_masuk'] ?></td>
        <td> <?php echo $tampil['tgl_keluar'] ?></td>
        <td> <a  class="action-button2" href="hapus-reservasi.php?id_reservasi=<?php echo $tampil ['id_reservasi']; ?>">Hapus</a>
        <a  class="action-button1" href="edit-reservasi.php?id_reservasi=<?php echo $tampil ['id_reservasi']; ?>">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
<a href="input-reservasi.php">Tambahkan Data Baru</a>

</html>