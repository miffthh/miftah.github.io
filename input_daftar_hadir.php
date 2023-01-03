<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Form Tambah Data Daftar Hadir</h3>
<hr>
<form action="input_daftar_hadir.php" method="POST">
	<table class="table">
		<tr>
			<td>No Kehadiran</td>
			<td><input class="form-control" type="text" name="txtno_kehadiran" placeholder="" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input class="form-control" type="text" name="txtnim" placeholder="" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="txtnama" placeholder="" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td><input class="form-control" type="text" name="txttujuan" placeholder="" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Tanggal Berkunjung</td>
			<td><input class="form-control" type="date" name="txttanggal_berkunjung" placeholder="" aria-label="default input example"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
			</div>
		</div>
	</div>
</div>
	</table>
</form>

<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO daftar_hadir (no_kehadiran,nim,nama,tujuan,tanggal_berkunjung)
		VALUES('$_POST[txtno_kehadiran]','$_POST[txtnim]','$_POST[txtnama]','$_POST[txttujuan]','$_POST[txttanggal_berkunjung]')");

	if($simpan){
		header('location:index.php');
	}else{
		echo "Gagal Menyimpan Data...";
	}
}
?>