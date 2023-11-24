<link rel="stylesheet" href="input.css">
<div>
<h3>Edit Table Pegawai</h3>

<?php
include 'koneksi.php';
$id_pegawai= $_GET['id_pegawai'];
$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
<table>
    <tr>
        <td>ID Pegawai</td>
        <td><input type="number" name="ID Pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pegawai</td>
        <td><input type="text" name="Nama Pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td><input type="text" name="Jabatan" value="<?php echo $tampil['jabatan']; ?>"></td>
    </tr>
    <tr>
        <td>Gaji</td>
        <td><input type="text" name="Gaji" value="<?php echo $tampil['gaji']; ?>"></td>
    </tr>

</table>
        <input class="buton1" type="submit" value="KEMBALI">
        <input class="buton2" type="submit" value="SIMPAN">
</form>

<?php
}
?>
</div>