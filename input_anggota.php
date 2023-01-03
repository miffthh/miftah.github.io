 <?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Form Tambah Data Anggota</h3>
<hr>
<form action="input_anggota.php" method="POST">
	<table class="table">
		<tr>
			<td>No Anggota</td>
			<td><input class="form-control" type="text" name="txtno_anggota" placeholder="Masukkan No Anggota" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="txtnama" placeholder="Masukkan Nama Anda" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td><input class="form-control" type="text" name="txtjurusan" placeholder="Pilih Jurusan" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtjenis_kelamin">
					<option value=""> - Pilih Jenis Kelamin - </option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><input class="form-control" type="text" name="txtno_telepon" placeholder="Masukkan No Telepon Anda" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input class="form-control" type="text" name="txtalamat" placeholder="Masukkan Alamat Anda" aria-label="default input example"></td>
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
	</table>
</form>

<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO anggota (no_anggota,nama,jurusan,jenis_kelamin,no_telepon,alamat)
		VALUES('$_POST[txtno_anggota]','$_POST[txtnama]','$_POST[txtjurusan]','$_POST[txtjenis_kelamin]','$_POST[txtno_telepon]','$_POST[txtalamat]')");

	if($simpan){
		header('location:data_anggota.php');
	}else{
		echo "Gagal Menyimpan Data...";
	}
}
?>