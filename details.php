<?php include_once('koneksi.php');
if(!(isset($_SESSION)))  {
	session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Waroeng || Jual beli produk warung</title> 
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Hakko Bio Richard"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body >

	<header>
		<div class="container">
			<div class="row">
				<div class="logo_span3">
					<a href="#" class="brand"><img src="img/ewa.png" alt="logo"></a>	
				</div>
				
				<div class="span9">
					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<div class="nav-collapse collapse">
							<ul class="nav">
			              			<li class="active"><a href="index.php">Home</a></li>
			              			<li><a href="produk.php">Produk Kami</a></li>
                                    <li><a href="detail.php">Keranjang</a></li>
                                    <li><a href="registrasi.php" >Registrasi</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="index.html">Admin</a></li>
			                  				<li><a href="index.php">Konsumen</a></li>
			                  				<!--<li class="divider"></li>
			                  				<li class="nav-header">Nav header</li>
			                  				<li><a href="#">Separated link</a></li>
			                  				<li><a href="#">One more separated link</a></li>-->
			                			</ul>
			              			</li>
			            		</ul>
							
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>

	</header>
	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-usd ico-gray">Keranjang</i></h2>
				
			</div>
			
		</div>
		
	</div>
	<div id="wrapper">
		<div class="container">
			<div class="title">
				<h3>Detail Keranjang Belanja Anda</h3>
			</div>
<table class="table table-hover tabel-condensed">
<tr>
		<th><center>No Pembelian</center></th>
		<th><center>Kode Barang</center></th>
		<th><center>Nama Barang</center></th>
		<th><center>Jumlah</center></th>
		<th><center>Harga satuan</center></th>
		<th><center>Harga total</center></th>
		<th><center>opsi</center></th>
</tr>	
<?php 
 $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "select * from barang where br_id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['br_hrg'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['br_id']; ?></center></td>
                <td><center><?php echo $data['br_nm']; ?></center></td>
                <td><center><?php echo number_format($data['br_hrg']); ?></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center><?php echo number_format($jumlah_harga); ?></center></td>
                <td><center><a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-success">Tambah</a> <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-warning">Kurang</a> <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-danger">Hapus</a></center></td>
                </tr>
                
					<?php
                    //mysql_free_result($query);			
						}
							//$total += $sub;
						}?>  
                         <?php
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Ups, Keranjang kosong!</td></tr></table>';
					echo '<p><div align="right">
						<a href="index.php" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="index.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
						<a href="checkout.php?total='.$total.'" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
						</div></p>
					';
				}
				?>
</table>
			
		</div>
		
	</div>

 
	<div id="footer-menu" class="hidden-tablet hidden-phone">
		<!-- bagian footer-->
		<div class="container">
			<div class="row">
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#" ><img src="img/logo-footer-menu.png" alt="logo"></a>
					</div>
				</div>
				<div class="span9">

					<div id="footer-menu-links">
						<ul id="footer-nav">
							<li><a href="#">Bumbu Dapur</a></li>
							<li><a href="#">Gula</a></li>
							<li><a href="#">Makanan</a></li>
							<li><a href="#">Minuman</a></li>
							<li><a href="#">Beras</a></li>
							<li><a href="#">Minyak</a></li>
							
						</ul>

					</div>
					
				</div>
				<div class="span1">

					<div id="footer-menu-back-to-top">
						<a href="#"></a>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</div>

	<div id="footer">

		<div class="container">

			<div class="row">

				<div class="span3">
					<h5>
						<p align="justify">
							E-Waroeng adalah toko warung onlin di bidangn makanan, minuman, maupun bumbu dapur. sasaran kami adalah dari semua kalangan rumah tangga
						</p>
					</h5>
				</div>
				
				<div class="span3">
				<h5 align="justify">
					<p>
						Alamat kami di Jalan bundaran ngabul Jepara:
						telp : 089675689270</br>
						e-mail: ewaroeng@gmail.co.id</br>
					</p>
				</h5>					
				</div>

				<div class="span6">
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="https://www.twitter.com"></a>
											
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="https://www.Facebook.com"></a>
											
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-instagram">
										</div>
										<div class="social-info-back social-google-hover">
											<a href="https://www.twitter.com"></a>
											
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>

			</div>
			

		</div>
		
	</div>
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				Copyright &copy; <a href="http://www.niqoweb.com">E=Waroeng||2017</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
</body>

</html>