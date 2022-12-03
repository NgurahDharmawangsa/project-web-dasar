<?php  

include '../samples/koneksi.php';

$kurikulum = $_POST['kurikulum'];

mysqli_query($koneksi,"insert into kurikulum_prodi values('','$kurikulum')");

header("location:basic-table.php");
?>