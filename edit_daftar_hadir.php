<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
<h3>Form Edit Data Daftar Hadir</h3>
<hr>
<p>Selamat Datang di Halaman Edit Data Daftar Hadir. Berikut merupakan Form Edit Data Daftar Hadir Perpustakaan.</p>
<hr>
<?php 
include "koneksi.php";
	$no_kehadiran=$_GET['no_kehadiran'];
	$sqlEdit = mysqli_query($konek, "SELECT *FROM daftar_hadir WHERE no_kehadiran='$_GET[no_kehadiran]'");
	$e=mysqli_fetch_array($sqlEdit);

 ?>
<form action="edit_daftar_hadir.php" method="POST">
	<table class="table">
		<tr>
			<td>No Kehadiran</td>
			<td><input type="text" name="txtno_kehadiran" value="<?php echo $e['no_kehadiran']; ?>" readonly></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="txtnim" value="<?php echo $e['nim']; ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="txtnama" value="<?php echo $e['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td><input type="text" name="txttujuan" value="<?php echo $e['tujuan']; ?>"></td>
		</tr>
		<tr>
			<td>Tanggal Berkunjung</td>
			<td><input type="date" name="txttanggal_berkunjung" value="<?php echo $e['tanggal_berkunjung']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Simpan"></td>
		</tr>
		</div>			
		</div>		
	</div>	
</div>
	</table>
</form>

<?php

include "koneksi.php";
if (isset($_POST['update'])) {
    $no_kehadiran = $_POST['txtno_kehadiran'];
    $nim = $_POST['txtnim'];
    $nama = $_POST['txtnama'];
    $tujuan = $_POST['txttujuan'];
    $tanggal_berkunjung = $_POST['txttanggal_berkunjung'];


    $result = mysqli_query($konek, "UPDATE daftar_hadir SET nim='$nim',
    														nama='$nama',
    														tujuan='$tujuan',
    														tanggal_berkunjung='$tanggal_berkunjung'
    													WHERE no_kehadiran='$no_kehadiran'");

    header("Location:index.php");
	
}
?>