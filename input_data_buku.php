<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Form Tambah Data Buku</h3>
<hr>
<form action="input_data_buku.php" method="POST">

	<table class="table">
		<tr>
			<td>No Buku</td>
			<td><input class="form-control" type="text" name="txtno_buku" placeholder="Masukkan No Buku" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input class="form-control" type="text" name="txtjudul" placeholder="Masukkan Judul Buku" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input class="form-control" type="text" name="txtpenerbit" placeholder="Masukkan Penerbit Buku" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><input class="form-control" type="text" name="txttahun_terbit" placeholder="Masukkan Tahun Terbit Buku" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input class="form-control" type="text" name="txtpengarang" placeholder="Masukkan Pengarang Buku" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input class="form-control" type="text" name="txtstok" placeholder="Masukkan Jumlah Stok Buku" aria-label="default input example"></td>
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
	$simpan = mysqli_query($konek, "INSERT INTO data_buku (no_buku,judul,penerbit,tahun_terbit,pengarang,stok)
		VALUES('$_POST[txtno_buku]','$_POST[txtjudul]','$_POST[txtpenerbit]','$_POST[txttahun_terbit]','$_POST[txtpengarang]','$_POST[txtstok]')");

	if($simpan){
		header('location:data_buku.php');
	}else{
		echo "Gagal Menyimpan Data...";
	}
}
?>