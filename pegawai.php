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
    </head>
    <b>Tabel Pegawai</b><br> <br>
    
<table border="1">
    <tr>
        <th>id_pegawai</th>
        <th>nama_pegawai</th>
        <th>jabatan</th>
        <th>gaji</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM pegawai");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr class="isi">
        <td> <?php echo $tampil['id_pegawai'] ?></td>
        <td> <?php echo $tampil['nama_pegawai'] ?></td>
        <td> <?php echo $tampil['jabatan'] ?></td>
        <td> <?php echo $tampil['gaji'] ?></td>
        <td> <a  class="action-button2" href="hapus-pegawai.php?id_pegawai=<?php echo $tampil ['id_pegawai']; ?>">Hapus</a>
        <a  class="action-button1" href="edit-pegawai.php?id_pegawai=<?php echo $tampil ['id_pegawai']; ?>">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
<a href="input-pegawai.php">Tambahkan Data Baru</a>

</html>