<?php  

include '../samples/koneksi.php';

$kode = $_POST['kode'];
$kurikulum = $_POST['kurikulum'];

mysqli_query($koneksi,"update kurikulum_prodi set kurikulum='$kurikulum' where kode='$kode'");

header("location:basic-table.php");

?>