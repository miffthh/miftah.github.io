<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Form Input Data Peminjaman</h3>
<hr>
<form action="input_peminjaman.php" method="POST">
	<table class="table">
		<tr>
			<td>No Peminjaman</td>
			<td><input class="form-control" type="text" name="txtno_peminjaman" placeholder="Masukan No Peminjaman" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>No Buku</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtno_buku" kode="no_buku" class="form-control" onchange='changeValue(this.value)'required >
				<option value="">- Pilih No Buku -</option>
				<?php 
				$query =mysqli_query($konek, "select *from data_buku order by no_buku esc");
				$result =mysqli_query($konek, "select *from data_buku");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_buku" value="'.$row['no_buku'].'">' .$row['no_buku']. '</option>';
				}
				 ?>
			</select></td>
		</tr>
			<tr>
			<td>Judul Buku</td>
			<td><select name="txtjudul" kode="judul" class="form-control" onchange='changeValue(this.value)'required >
				<option value="">- Pilih Judul Buku -</option>
				<?php 
				$query =mysqli_query($konek, "select *from data_buku order by no_buku esc");
				$result =mysqli_query($konek, "select *from data_buku");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="judul" value="'.$row['judul'].'">' .$row['judul']. '</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>No Anggota</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtno_anggota" kode="no_anggota" class="form-control" onchange='changeValue(this.value)'required >
				<option value="">- Pilih No Anggota -</option>
				<?php 
				$query =mysqli_query($konek, "select *from anggota order by no_anggota esc");
				$result =mysqli_query($konek, "select *from anggota");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_anggota" value="'.$row['no_anggota'].'">' .$row['no_anggota']. '</option>';
				}
				 ?>
			</select></td>
		</tr>
			<tr>
			<td>Nama Anggota</td>
			<td><select name="txtnama" kode="nama" class="form-control" onchange='changeValue(this.value)'required >
				<option value="">- Pilih Nama Anggota -</option>
				<?php 
				$query =mysqli_query($konek, "select *from anggota order by no_anggota esc");
				$result =mysqli_query($konek, "select *from anggota");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="nama" value="'.$row['nama'].'">' .$row['nama']. '</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Id Petugas</td>
			<td><select name="txtid_petugas" kode="id_petugas" class="form-control" onchange='changeValue(this.value)'required >
				<option value="">- Pilih Id Petugas -</option>
				<?php 
				$query =mysqli_query($konek, "select *from petugas order by id_petugas esc");
				$result =mysqli_query($konek, "select *from petugas");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="id_petugas" value="'.$row['id_petugas'].'">' .$row['id_petugas']. '</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah Pinjam</td>
			<td><input class="form-control" type="text" name="txtjumlah_pinjam"placeholder="Masukan Jumlah Buku yang dipinjam" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Tanggal Pinjam</td>
		<td><input class="form-control" type="date" name="txttanggal_pinjam"placeholder="Masukan Tanggal Pinjam Buku" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td><input class="form-control" type="date" name="txttanggal_kembali"placeholder="Masukan Tanggal Kembali Buku" aria-label="default input example"></td>
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
	$simpan = mysqli_query($konek, "INSERT INTO transaksi_peminjaman (no_peminjaman,no_buku,judul,no_anggota,nama,id_petugas,jumlah_pinjam,tanggal_pinjam,tanggal_kembali)
		VALUES('$_POST[txtno_peminjaman]','$_POST[txtno_buku]','$_POST[txtjudul]','$_POST[txtno_anggota]','$_POST[txtnama]','$_POST[txtid_petugas]','$_POST[txtjumlah_pinjam]','$_POST[txttanggal_pinjam]','$_POST[txttanggal_kembali]')");

	if($simpan){
	?>
		<script language=javascript>document.location.href="data_peminjaman.php";</script>
		<?php

	}else{
		echo "Gagal Menyimpan Data...";
	}
	mysql_close();
}
		?>