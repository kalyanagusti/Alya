<?php
include ("koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST"){
	//ambil data dari form
	$id_daftar =$_POST['id_admin'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$tanggal_lahir =$_POST['tanggal_lahir'];
	$alamat =$_POST['alamat'];
	//buat query
	$sql="INSERT INTO daftar (id_daftar, nama, email, tanggal_lahir, alamat) VALUE ('$id_daftar','$nama','$email','$tanggal_lahir', '$alamat')";
	$query =mysqli_query ($koneksi,$sql) or die (mysqli_error ($koneksi));
	//apakah query update berhasil
	if ($query){
	//kalau berhasil, alihkan ke hlaman index.php dengan status=sukses
	header ('location:index.php?status=sukses');
	}else{
		//kalau gagal, alihkan ke halaman index.php dengan status = gagal
	header ('location:index.php?status=gagal');
	}
}else{
	die("Akses dilarang...");
}
?>
	
	