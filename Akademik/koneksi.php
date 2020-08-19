<?php
$server		= 'localhost';
$database	= 'akademik';
$user		= 'root';
$pass 		= '';

$koneksi = mysqli_connect($server,$user,$pass,$database);
if(mysqli_connect_errno($koneksi)){
 echo 'Koneksi Gagal';
}
?>