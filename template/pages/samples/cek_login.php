<?php 

session_start();

include 'koneksi.php';

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from login where user_id='$user_id' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['user_id'] = $user_id;
	$_SESSION['status'] = "login";
	header("location:login.php?pesan=login");
}else{
	header("location:login.php?pesan=gagal");
}
?>