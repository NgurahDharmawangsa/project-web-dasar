<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from rps_detail where noid_detail='$id'");

header("location:tablerpsdetail.php");

?>