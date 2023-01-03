<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Form Tambah Data Petugas</h3>
<hr>
<form action="input_petugas.php" method="POST">
	<table class="table">
		<tr>
			<td>Id Petugas</td>
			<td><input class="form-control" type="text" name="txtid_petugas" placeholder="Masukkan Id Petugas" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="txtnama" placeholder="Masukkan Nama Petugas" aria-label="default input example"></td>
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
			<td>Username</td>
			<td><input class="form-control" type="text" name="txtusername" placeholder="Masukkan Username Petugas" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="form-control" type="text" name="txtpassword" placeholder="Masukkan Password Petugas" aria-label="default input example"></td>
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
	$simpan = mysqli_query($konek, "INSERT INTO petugas (id_petugas,nama,jenis_kelamin,username,password)
		VALUES('$_POST[txtid_petugas]','$_POST[txtnama]','$_POST[txtjenis_kelamin]','$_POST[txtusername]','$_POST[txtpassword]')");

	if($simpan){
		header('location:data_petugas.php');
	}else{
		echo "Gagal Menyimpan Data...";
	}
}
?>