<?php  

include '../../pages/samples/koneksi.php';

$noid_detail = $_POST['noid_detail'];
$noid_rps = $_POST['noid_rps'];
$minggu = $_POST['minggu'];
$materi = $_POST['materi'];
$sesuai = $_POST['sesuai'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi,"update rps_detail set noid_rps='$noid_rps', minggu='$minggu', materi='$materi', sesuai='$sesuai', keterangan='$keterangan' where noid_detail='$noid_detail'");

header("location:tablerpsdetail.php");

?>