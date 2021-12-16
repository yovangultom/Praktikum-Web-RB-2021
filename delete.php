<?php
include "connect.php";

$id = $_POST['deleteData'];

$sql = "Delete from mahasiswa, where nim='$id'";
$hasil=mysqli_query($connect,$sql);
?>