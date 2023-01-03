<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM daftar_hadir WHERE no_kehadiran='$_GET[no_kehadiran]'");

if($hapus){
	header('location:data_daftar_hadir.php');
}else{
	echo "Gagal Menghapus Data...";
}
?>