<html>
    <head>
      
        <link rel="stylesheet" type="text/css" href="styledashboard.css">
        <link rel="stylesheet" href="styletable.css">
    </head>
    <body>
	
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
    <h3>Tabel Kamar </h3>
<table border="1">
    <tr>
        <th>id_kamar</th>
        <th>nama_kamar</th>
        <th>tipe_kamar</th>
        <th>harga</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM kamar");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr class="isi">
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <?php echo $tampil['nama_kamar'] ?></td>
        <td> <?php echo $tampil['tipe_kamar'] ?></td>
        <td> <?php echo $tampil['harga'] ?></td>
        <td> 
            <a class="action-button2" href="hapus-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>">Hapus</a>
            <a class="action-button1" href="edit-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>
<a href="input-kamar.php" class="tambah">Tambahkan Data Baru</a>
</body>
</html>