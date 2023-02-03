<?php
include("koneksi.php");
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$id = $_POST['id_daftar'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tl = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	//buat query update
	$sql = "UPDATE daftar SET id_daftar='$id', nama='$nama', email='$email', tl='$tanggal_lahir', alamat='$alamat' WHERE id_daftar= $id";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah update berhasil
	if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
		header('location: index.php?status=sukses');
	}else{
		//kalau gagal, alihkan ke halaman index.php dengan status = gagal
		header('location: index.php?status=gagal');
	}
}else{
	die("Akses dilarang...");
}
?>