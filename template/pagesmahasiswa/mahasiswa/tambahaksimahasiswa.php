<?php  

include '../samples/koneksi.php';

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tahun_diterima = $_POST['tahun_diterima'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$kode_prodi = $_POST['kode_prodi'];

mysqli_query($koneksi,"insert into mahasiswa values('$nim','$nama_mahasiswa','$alamat','$no_telp','$tahun_diterima','$user_id','$password','$kode_prodi')");

header("location:tablemahasiswa.php");
?>