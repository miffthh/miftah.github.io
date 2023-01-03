<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM petugas WHERE id_petugas='$_GET[id_petugas]'");

if($hapus){
	header('location:data_petugas.php');
}else{
	echo "Gagal Menghapus Data...";
}
?>