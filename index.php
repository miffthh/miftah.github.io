<?php include'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col mt-2">

        <h3>Form Data Daftar Hadir</h3>
<hr>
<p>Silahkan Isi Daftar Hadir !!!</p>
<hr>
      <form action="input_daftar_hadir.php" method="POST" >
  <table>
    <tr>
      <td>No Kehadiran</td>
      <td><input class="form-control" type="text" name="txtno_kehadiran" placeholder="Masukkan No Kehadiran" aria-label="default input example"></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td><input class="form-control" type="text" name="txtnim" placeholder="Masukkan NIM Anda" aria-label="default input example"></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input class="form-control" type="text" name="txtnama" placeholder="Masukkan Nama Anda" aria-label="default input example"></td>
    </tr>
    <tr>
      <td>Tujuan</td>
      <td><input class="form-control" type="text" name="txttujuan" placeholder="Masukkan Tujuan Berkunjung" aria-label="default input example"></td>
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
    </div>
    <div class="col mt-2">
     <h3>Data Daftar Hadir</h3>
     <hr>
     <p>Berikut Merupakan Data Daftar Hadir Anggota Perpustakaan.</p>
     <hr>
<table class="table">
  <thead class="table-dark">


  <tr align="center">
    
    <th> No</th>
    <th>No Kehadiran</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tujuan</th>
    <th>Tanggal Kunjung</th>
    <th>Aksi</th>
  </tr>
  </tr>
  </thead>
  <tbody class="table table-success table-striped">

  <?php 
  include "koneksi.php";
  $no=1;
  $sqldaftarhadir = mysqli_query($konek, "SELECT *FROM daftar_hadir ORDER BY no_kehadiran ASC");

  while ($d =mysqli_fetch_array($sqldaftarhadir)) {
    echo "<tr>
    <td align='center'>$no</td>
    <td align='center'>$d[no_kehadiran]</td>
    <td align='center'>$d[nim]</td>
    <td align='center'>$d[nama]</td>
    <td align='center'>$d[tujuan]</td>
    <td align='center'>$d[tanggal_berkunjung]</td>
    <td>
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
    </div>
  </div>

</div>