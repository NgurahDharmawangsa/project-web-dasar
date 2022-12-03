<?php  

include '../samples/koneksi.php';

$noid_rps = $_POST['noid_rps'];
$semester = $_POST['semester'];
$kode_mk = $_POST['kode_mk'];
$nip = $_POST['nip'];

mysqli_query($koneksi,"update rps set semester='$semester', kode_mk='$kode_mk', nip='$nip' where noid_rps='$noid_rps'");

header("location:tablerps.php");

?>