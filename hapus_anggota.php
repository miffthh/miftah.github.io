<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM anggota WHERE no_anggota='$_GET[no_anggota]'");

if($hapus){
	header('location:data_anggota.php');
}else{
	echo "Gagal Menghapus Data...";
}
?>