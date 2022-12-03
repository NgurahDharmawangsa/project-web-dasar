<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from mata_kuliah where kode_mk='$id'");

header("location:tablematkul.php");

?>