<?php  
	$koneksi = mysqli_connect("localhost","root","","evaluasi_rps");

	if(mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

?>