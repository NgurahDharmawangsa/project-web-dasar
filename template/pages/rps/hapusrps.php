<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from rps where noid_rps='$id'");

header("location:tablerps.php");

?>