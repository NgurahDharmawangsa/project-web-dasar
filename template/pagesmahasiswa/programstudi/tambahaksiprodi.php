<?php  

include '../samples/koneksi.php';

$kode_prodi = $_POST['kode_prodi'];
$nama_prodi = $_POST['nama_prodi'];
$nip = $_POST['nip'];

mysqli_query($koneksi,"insert into program_studi values('$kode_prodi','$nama_prodi','$nip')");

header("location:tableprodi.php");
?>