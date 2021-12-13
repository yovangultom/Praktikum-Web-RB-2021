<?php
include "koneksi.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

$sql = "UPDATE mahasiswa set nama='".$nama."', nim='".$nim."', angkatan='".$angkatan."', prodi='".$prodi."' where nim = '".$id."' ";
$hasil = mysqli_query($con,$sql);
?>