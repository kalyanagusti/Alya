<?php
$koneksi=mysqli_connect("localhost","root","","db_even");
//cek koneksi
if (mysqli_connect_error()){
echo "Koneksi database gagal:",  mysqli_connect_error();
}
?>