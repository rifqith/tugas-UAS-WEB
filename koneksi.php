<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pass = "";
$db_name = "e_warong";
if(mysqli_connect_error()){
	echo 'gagal melakukan koneksi ke database : '.
	mysqli_connect_error();
}



 ?>