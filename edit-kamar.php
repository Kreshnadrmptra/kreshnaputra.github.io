<link rel="stylesheet" href="input.css">
<div>
<h3>Edit Table Kamar</h3>

<?php
include 'koneksi.php';
$id_kamar= $_GET['id_kamar'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>ID Kamar</td>
        <td><input class="stylefield" type="number" name="ID Kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Kamar</td>
        <td><input class="stylefield" type="text" name="Nama Kamar" value="<?php echo $tampil['nama_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Tipe Kamar</td>
        <td><input class="stylefield"  type="text" name="Tipe Kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input class="stylefield"  type="text" name="Harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>
</table>
        <input class="buton1" type="submit" value="KEMBALI">
        <input class="buton2" type="submit" value="SIMPAN">
</form>
<?php
}
?>
</div>