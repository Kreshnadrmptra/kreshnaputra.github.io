<link rel="stylesheet" href="input.css">
<div>
<h3>Edit Table Pelanggan</h3>

<?php
include 'koneksi.php';
$id_pelanggan= $_GET['id_pelanggan'];
$data = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pelanggan.php">
<table>
    <tr>
        <td>ID Pelanggan</td>
        <td><input type="number" name="ID Pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pelanggan</td>
        <td><input type="text" name="Nama Pelanggan" value="<?php echo $tampil['nama_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="Alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td><input type="text" name="Telepon" value="<?php echo $tampil['telepon']; ?>"></td>
    </tr>
</table>
        <input class="buton1" type="submit" value="KEMBALI">
        <input class="buton2" type="submit" value="SIMPAN">
</form>

<?php
}
?>
</div>