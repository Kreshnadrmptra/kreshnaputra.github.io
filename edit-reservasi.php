<link rel="stylesheet" href="input.css">
<div>
<h3>Edit Table Reservasi</h3>

<?php
include 'koneksi.php';
$id_reservasi= $_GET['id_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM reservasi WHERE id_reservasi='$id_reservasi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-reservasi.php">
<table>
    <tr>
        <td>ID Reservasi</td>
        <td><input type="number" name="ID Reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>ID Kamar</td>
        <td><input type="text" name="ID Kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>ID Pelanggan</td>
        <td><input type="text" name="ID Pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td><input type="text" name="Tanggal Masuk" value="<?php echo $tampil['tgl_masuk']; ?>"></td>
    </tr>
    <tr>
        <td>Tanggal Keluar</td>
        <td><input type="text" name="Tanggal Keluar" value="<?php echo $tampil['tgl_keluar']; ?>"></td>
    </tr>
</table>
        <input class="buton1" type="submit" value="KEMBALI">
        <input class="buton2" type="submit" value="SIMPAN">
</form>

<?php
}
?>
</div>