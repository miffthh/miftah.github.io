<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Data Peminjaman</h3>	
<hr>
<p>Selamat Datang di Halaman Peminjaman Buku. Berikut merupakan data Peminjaman Buku para Anggota Perpustakaan yang sudah terdaftar menjadi Anggota.</p>
<hr>
<a href="input_peminjaman.php">Tambah Data</a>

<table class="table">
	<thead class="table-dark">


	<tr align="center">
		<th> No</th>
		<th>No Peminjaman</th>
		<th>No Buku</th>
		<th>Judul Buku</th>
		<th>No Anggota</th>
		<th>Nama</th>
		<th>Id Petugas</th>
		<th>Jumlah Pinjam</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Aksi</th>
	</tr>
	</tr>
	</thead>
	<tbody class="table table-success table-striped">

	<?php 
	include "koneksi.php";
	$no=1;
	$sqlPeminjaman = mysqli_query($konek, "SELECT * FROM transaksi_peminjaman INNER JOIN data_buku ON transaksi_peminjaman.no_buku = data_buku.no_buku INNER JOIN anggota ON transaksi_peminjaman.no_anggota = anggota.no_anggota ORDER BY no_peminjaman ASC");

	while ($d =mysqli_fetch_array($sqlPeminjaman)) {
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[no_peminjaman]</td>
		<td align='center'>$d[no_buku]</td>
		<td align='center'>$d[judul]</td>
		<td align='center'>$d[no_anggota]</td>
		<td align='center'>$d[nama]</td>
		<td align='center'>$d[id_petugas]</td>
		<td align='center'>$d[jumlah_pinjam]</td>
		<td align='center'>$d[tanggal_pinjam]</td>
		<td align='center'>$d[tanggal_kembali]</td>
		<td align='center'>
			<a href='edit_peminjaman.php?no_peminjaman=$d[no_peminjaman]'>Edit</a> | <a href='hapus_peminjaman.php?no_peminjaman=$d[no_peminjaman]'>Hapus</a>
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