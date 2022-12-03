<?php  

include '../samples/koneksi.php';

$nip = $_POST['nip'];
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$kode_prodi = $_POST['kode_prodi'];

mysqli_query($koneksi,"insert into dosen values('$nip','$nidn','$nama_dosen','$alamat','$no_telp','$user_id','$password','$kode_prodi')");

header("location:logindosen.php");
?>