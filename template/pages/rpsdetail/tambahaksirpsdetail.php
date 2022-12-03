<?php  

include '../samples/koneksi.php';

$noid_detail = $_POST['noid_detail'];
$noid_rps = $_POST['noid_rps'];
$minggu = $_POST['minggu'];
$materi = $_POST['materi'];
$sesuai = $_POST['sesuai'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi,"insert into rps_detail values('$noid_detail','$noid_rps','$minggu','$materi','$sesuai','$keterangan')");

header("location:tablerpsdetail.php");
?>