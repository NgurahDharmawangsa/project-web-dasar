<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from kurikulum_prodi where kode='$id'");

header("location:basic-table.php");

?>