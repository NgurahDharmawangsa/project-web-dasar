<?php  

include '../../pages/samples/koneksi.php';

$noid_rps = $_POST['noid_rps'];
$semester = $_POST['semester'];
$kode_mk = $_POST['kode_mk'];
$nip = $_POST['nip'];

mysqli_query($koneksi,"insert into rps values('$noid_rps','$semester','$kode_mk','$nip')");

header("location:tablerps.php");
?>