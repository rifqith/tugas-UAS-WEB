<?php include('koneksi.php') ?>
 <!DOCTYPE html>
<html>
<head>
	<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
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
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
	<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#" id="logo"><img src="img/ewa.png"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
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
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			

</head>
<script type="text/javascript">
	$(function(){
		$("#datepicker").datepicker();
	});
</script>

<body class="container">
	<div class="container">
		<div class="header
		<div class="nav nav-navbar">
			<div class="jumbotron">
<div rows	>
		<form>
			<h3>Regestrasi</h3>
<form action="" method="POST">
    <div class="content">
        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="20%"><label for="nama">Nama Lengkap</label></td>
                <td colspan="3"><input name="nama" id="nama" type="text" class="form"></td>
            </tr>
            <tr>
                <td valign="top"><label for="alamat">Alamat</label></td>
                <td valign="top" colspan="2">
                    <input type="text" name="alamat" id="alamat" class="form" placeholder="Masukan Provinsi,kabupaten,kecamatan,desa,rt/rw">
                </td>
            </tr>
            <tr>
                <td><label for="negara">Negara</label></td>
                <td><input type="text" name="negara" id="negara" class="form"></td>
            </tr>
            <tr>
                <td><label for="kota">Kota</label></td>
                <td><input type="text" name="kota" id="kota" class="form"></td>
            </tr>
            <tr>
                <td><label for="kode_pos">Kode Pos</label></td>
                <td><input type="number" name="kode_pos" id="kode_pos" class="form"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td colspan="3"><input name="email" id="email" type="text" class="form"></td>
            </tr>
            <tr>
                <td><label for="hp">No. HP</label></td>
                <td colspan="3"><input name="hp" id="hp" type="number" class="form"></td>
            </tr>
        </table>
    </div>
    <input type="submit" value="Simpan">
</form>

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
