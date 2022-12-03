<?php  

include '../../pages/samples/koneksi.php';

$nip = $_POST['nip'];
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$kode_prodi = $_POST['kode_prodi'];

mysqli_query($koneksi,"update dosen set nidn='$nidn', nama_dosen='$nama_dosen', alamat='$alamat', no_telp='$no_telp', user_id='$user_id', password='$password', kode_prodi='$kode_prodi' where nip='$nip'");

header("location:../../indexdosen.php");

?>