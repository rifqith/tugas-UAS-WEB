<?php 
include_once('koneksi.pho');
$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysql_query("SELECT COUNT(username) as jumlah FROM users WHERE username ='$username' and password='password'");
$data = mysql_fetch_array($query);

if($data['jumlah'] >= 1)
{
	session_start();
	$_SESSION['username'] = $username;

	echo "<script>alert('Selamat datang $username'); window.location = 'admin/tambah.php'</script>";
}else{
	echo  "<script>alert('Username dan Password tidak valid.'); window.location = 'index.html'</script>";
}

 ?>