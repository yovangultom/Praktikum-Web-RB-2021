<?php
include "koneksi.php";
$nim=$_POST["NIM"];
$nama=$_POST["Nama"];
$prodi=$_POST["Prodi"];
$angkatan=$_POST["Angkatan"];

$sql="insert into mahasiswa (NIM,Nama,Prodi,Angkatan) values ('$NIM','$Nama','$Prodi','$Angkatan')";
$hasil=mysqli_query($kon,$sql);
?>