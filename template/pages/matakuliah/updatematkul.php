<?php  

include '../samples/koneksi.php';

$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
$sks_teori = $_POST['sks_teori'];
$sks_praktek = $_POST['sks_praktek'];
$semester = $_POST['semester'];
$kurikulum = $_POST['kurikulum'];

mysqli_query($koneksi,"update mata_kuliah set nama_mk='$nama_mk', sks='$sks', sks_teori='$sks_teori', sks_praktek='$sks_praktek', semester='$semester', kurikulum='$kurikulum' where kode_mk='$kode_mk'");

header("location:tablematkul.php");

?>