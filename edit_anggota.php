<?php
	error_reporting(0);
	
	include 'header.php'; 
	include "koneksi.php";
	$no_anggota=$_GET['no_anggota'];
	$sqlEdit = mysqli_query($konek, "SELECT *FROM anggota WHERE no_anggota='".$_GET['no_anggota']."'");
	$e=mysqli_fetch_array($sqlEdit); 
	?>


<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
			<h3>Form Edit Data Anggota</h3>
<hr>
<p>Selamat Datang di Halaman Edit Data Anggota. Berikut merupakan Form Edit Data Anggota Perpustakaan yang sudah terdaftar menjadi Anggota.</p>
<hr>
<form  method="POST" action="edit_anggota.php">
	<table class="table">

		<tr>
			<td>No Anggota</td>
			<td><input type="text" name="txtno_anggota" value="<?php echo $e['no_anggota']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="txtnama" value="<?php echo $e['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td><input type="text" name="txtjurusan" value="<?php echo $e['jurusan']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtjenis_kelamin">
					<option value="<?php echo $e['jenis_kelamin']; ?>"><?php echo $e['jenis_kelamin']; ?></option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><input type="text" name="txtno_telepon" value="<?php echo $e['no_telepon']; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="txtalamat" value="<?php echo $e['alamat']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Simpan"></td>
		</tr>
	</table>
	</div>			
		</div>		
	</div>
</div>
</form>

<?php

include "koneksi.php";
if (isset($_POST['update'])) {
    $no_anggota = $_POST['txtno_anggota'];
    $nama = $_POST['txtnama'];
    $jurusan = $_POST['txtjurusan'];
    $jenis_kelamin = $_POST['txtjenis_kelamin'];
    $no_telepon = $_POST['txtno_telepon'];
    $alamat = $_POST['txtalamat'];
    

    $result = mysqli_query($konek, "UPDATE anggota SET nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', no_telepon='$no_telepon', alamat='$alamat' WHERE no_anggota='$no_anggota'");

    header("Location:data_anggota.php");
}
?>
