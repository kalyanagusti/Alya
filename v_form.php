<?php
include ("koneksi.php");
if (isset($_GET['id_daftar'])){
	$title ="Edit";
	$url ='proses_edit';
	$id = $_GET['id_daftar'];
	//buat query untuk ambil data dari database
	$sql ="SELECT * FROM daftar WHERE id_daftar = $id";
	$query = mysqli_query ($koneksi,$sql);
	$daftar = mysqli_fetch_array ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) < 1){
	die("data tidak ditemukan ...");}
	//url jika edit data 	
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>
	<html>
	<head><title> Formulir Peserta </title></head>
	<body>
	<header><h3> Formulir Peserta </h3></header>
	<form action = "proses_pendaftaran.php" method = "POST">
	<fieldset>
	<legend><h2>Form Peserta </h2></legend>
	
<div>
	<label for ='id_daftar'>Id: </label><br>
	<input type ="text" name ="nis" value =" <?php if (isset($_GET['id_daftar']))
	{echo $daftar['id_daftar'];} ?> "/>
	</div>
	<label for ='nama'>Nama: </label><br>
	<input type = "text" name ="nama" value =" <?php if (isset($_GET['id_daftar']))
	{echo $daftar['id_daftar'];} ?> "/>
</div>
<div>
<label for ='email'>Email: </label><br>
<textarea name ="email" row = "5"> <?php if (isset($_GET['id_daftar']))
{echo $daftar['email'];} ?>	</textarea>
</div>
<div>
	<label for ='tanggal_lahir'>Tanggal Lahir: </label><br>
	<input type ="date" name ="tanggal_lahir" value =" <?php if (isset($_GET['id_daftar']))
	{echo $daftar['id_daftar'];} ?> "/>
	</div>
	<label for ='alamat'>Alamat: </label><br>
	<textarea name ="alamat" row = "5"> <?php if (isset($_GET['id_daftar']))
	{echo $daftar['alamat'];}?> </textarea>
</div>
<hr>
<div>
<input type ="submit" value ="Simpan" name = "simpan"/>
</div>
</fieldset>
</form></body></html>



