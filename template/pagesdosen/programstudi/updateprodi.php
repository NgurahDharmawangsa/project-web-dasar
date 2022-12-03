<?php  

include '../samples/koneksi.php';

$kode_prodi = $_POST['kode_prodi'];
$nama_prodi = $_POST['nama_prodi'];
$nip = $_POST['nip'];

mysqli_query($koneksi,"update program_studi set nama_prodi='$nama_prodi', nip='$nip' where kode_prodi='$kode_prodi'");

header("location:tableprodi.php");

?>