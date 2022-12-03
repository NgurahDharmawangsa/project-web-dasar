<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from mahasiswa where nim='$id'");

header("location:tablemahasiswa.php");

?>