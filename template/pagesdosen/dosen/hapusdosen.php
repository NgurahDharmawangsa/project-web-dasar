<?php  
include '../samples/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from dosen where nip='$id'");

header("location:tabledosen.php");

?>