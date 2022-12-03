<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from program_studi where kode_prodi='$id'");

header("location:tableprodi.php");

?>