<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Form Input Data Pengembalian</h3>
<hr>
<form action="input_pengembalian.php" method="POST">
	<table class="table">
		<tr>
			<td>No Pengembalian</td>
			<td><input class="form-control" type="text" name="txtno_pengembalian" placeholder="Masukan No Pengembalian Peminjaman" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>No Peminjaman</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtno_peminjaman" kode="no_peminjaman" class="form-control" onchange='changeValue(this.value)'required >
				<option value="">- Pilih No Peminjaman -</option>
				<?php 
				$query =mysqli_query($konek, "select *from transaksi_peminjaman order by no_peminjaman esc");
				$result =mysqli_query($konek, "select *from transaksi_peminjaman");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_peminjaman" value="'.$row['no_peminjaman'].'">' .$row['no_peminjaman']. '</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah Pengembalian</td>
			<td><input class="form-control" type="text" name="txtjumlah_pengembalian"placeholder="Masukan Jumlah Buku yang dikembalikan" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Tanggal Pengembalian</td>
		<td><input class="form-control" type="date" name="txttanggal_pengembalian"placeholder="Masukan Tanggal Pengembalian" aria-label="default input example"></td>
		</tr>
		<tr>
			<td>Denda</td>
			<td><input class="form-control" type="text" name="txtdenda"placeholder="Masukan Denda Keterlambatan Pengembalian Buku" aria-label="default input example"></td>
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
	$simpan = mysqli_query($konek, "INSERT INTO transaksi_pengembalian (no_pengembalian,no_peminjaman,jumlah_pengembalian,tanggal_pengembalian,denda)
		VALUES('$_POST[txtno_pengembalian]','$_POST[txtno_peminjaman]','$_POST[txtjumlah_pengembalian]','$_POST[txttanggal_pengembalian]','$_POST[txtdenda]')");

	if($simpan){
		header('location:data_pengembalian.php');
	}else{
		echo "Gagal Menyimpan Data...";
}
}
		?>