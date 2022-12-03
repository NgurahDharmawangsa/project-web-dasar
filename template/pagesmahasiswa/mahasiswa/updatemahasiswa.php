<?php  

include '../../pages/samples/koneksi.php';

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tahun_diterima = $_POST['tahun_diterima'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$kode_prodi = $_POST['kode_prodi'];

mysqli_query($koneksi,"update mahasiswa set nama_mahasiswa='$nama_mahasiswa', alamat='$alamat', no_telp='$no_telp', tahun_diterima='$tahun_diterima', user_id='$user_id', password='$password', kode_prodi='$kode_prodi' where nim='$nim'");

header("location:../../indexmahasiswa.php");

?>