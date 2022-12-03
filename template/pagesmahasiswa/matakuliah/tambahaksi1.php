<?php  

include '../../pages/samples/koneksi.php';

$kodemk = $_POST['kodemk'];
$namamk = $_POST['namamk'];
$sks = $_POST['sks'];
$sksteori = $_POST['sksteori'];
$skspraktek = $_POST['skspraktek'];
$semester = $_POST['semester'];
$kurikulum = $_POST['kurikulum'];

mysqli_query($koneksi,"insert into mata_kuliah values('$kodemk','$namamk','$sks','$sksteori','$skspraktek','$semester','$kurikulum')");

header("location:tablematkul.php");
?>