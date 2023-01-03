<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Data Pengembalian</h3>
<hr>
<p>Selamat Datang di Halaman Pengembalian Buku. Berikut merupakan data Pengembalian Buku para Anggota Perpustakaan yang sudah terdaftar menjadi Anggota.</p>
<hr>
<a href="input_pengembalian.php">Tambah Data</a>

<table class="table">
	<thead class="table-dark">


	<tr align="center">
		<th> No</th>
		<th>No Pengembalian</th>
		<th>No Peminjaman</th>
		<th>Jumlah Pengembalian</th>
		<th>Tanggal Pengembalian</th>
		<th>Denda</th>
		<th>Aksi</th>
	</tr>
	</tr>
	</thead>
	<tbody class="table table-success table-striped">

	<?php 
	include "koneksi.php";
	$no=1;
	$sqlPengembalian = mysqli_query($konek, "SELECT * FROM transaksi_pengembalian ORDER BY no_pengembalian ASC");

	while ($d =mysqli_fetch_array($sqlPengembalian)) {
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[no_pengembalian]</td>
		<td align='center'>$d[no_peminjaman]</td>
		<td align='center'>$d[jumlah_pengembalian]</td>
		<td align='center'>$d[tanggal_pengembalian]</td>
		<td align='center'>$d[denda]</td>
		<td align='center'>
			<a href='edit_pengembalian.php?no_pengembalian=$d[no_pengembalian]'>Edit</a> | <a href='hapus_pengembalian.php?no_pengembalian=$d[no_pengembalian]'>Hapus</a>
		</td>
		</tr>";
		$no++;
	}
	 ?>
</tbody>
	</div>			
		</div>		
	</div>	
</div>
</table>