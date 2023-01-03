<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Data Daftar Hadir</h3>
		
<hr>
<a href="input_daftar_hadir.php">Tambah Data</a>

<table class="table">
	<thead class="table-dark">


	<tr align="center">
		<th> No</th>
		<th>No Kehadiran</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tujuan</th>
		<th>Tanggal berkunjung</th>
		<th>Aksi</th>
	</tr>
	</tr>
	</thead>
	<tbody class="table table-success table-striped">

	<?php 
	include "koneksi.php";
	$no=1;
	$sqlMhs = mysqli_query($konek, "SELECT *FROM daftar_hadir ORDER BY no_kehadiran ASC");

	while ($d =mysqli_fetch_array($sqlMhs)) {
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[no_kehadiran]</td>
		<td align='center'>$d[nim]</td>
		<td align='center'>$d[nama]</td>
		<td align='center'>$d[tujuan]</td>
		<td align='center'>$d[tanggal_berkunjung]</td>
		<td align='center'>
			<a href='edit_daftar_hadir.php?no_kehadiran=$d[no_kehadiran]'>Edit</a> | <a href='hapus_daftar_hadir.php?no_kehadiran=$d[no_kehadiran]'>Hapus</a>
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