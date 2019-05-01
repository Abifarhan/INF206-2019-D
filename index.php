<!DOCTYPE html>
<html>
<head>
	<title>MugOn | Home</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logo.png" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- tampilan loading -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- bagian atas/kepala -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<!-- <form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form> -->
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="login.php">Login</a>atau <a href="daftar.php">Daftar</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="keranjang.php">Keranjang Belanja</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar text-center">
			<div class="container">
				<!-- bagian menu/ navigasi -->
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="tentang.php">MungOn?</a></li>
					<li><a href="metode.php">Metode Transaksi</a></li>
					<li><a href="kontak.php">Kontak</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- akhir bagian dari kepala/atas -->



	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mugon";
	//create connection
	$ikan = mysqli_connect($servername, $username, $password, $dbname);
	if ($ikan->connect_error){
		die("Connection failed:".$ikan->connect_error);
	}

	$sql = "SELECT * FROM ikan";
	$tampilIkan = mysqli_query($ikan,$sql);
	?>
	<!-- bagian halaman seluncur/bergeser -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<?php
			$batas = mysqli_num_rows($tampilIkan);
			while($variabel = mysqli_fetch_assoc($tampilIkan)) {?>
			<?php if (!($batas>4)){?>
			<div class="hs-item set-bg" data-setbg="img/Ikan/<?php echo $variabel['gambar_ikan'];?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Ikan Terbaru</span>
							<?php echo "<h2>".$variabel ['nama_ikan']."</h2>"?>
							<p>Ikan Tuna masih segar, ayo dibeli jangan sampai kehabisan, sisa stok hanya 10kg.</p>
							<a href="detail_ikan.php?id=<?php echo $variabel ['id_ikan'] ?>" class="site-btn sb-line">Lihat</a>
							<a href="beli.php?id=<?php echo $variabel['id_ikan']?>" class="site-btn sb-white">Beli Sekarang</a>
						</div>	
					</div>
					<div class="offer-card text-white">
						<span>Hanya</span>
						<?php echo "<h4>". $variabel['harga_ikan']."/kg</h4>"?>
						<p>Beli Sekarang</p>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php $batas--;}?>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- akhir bagian halaman seluncur/bergeser -->


	<!-- Bagian fitur -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="https://i.imgur.com/c6OKQJF.png" alt="#">
						</div>
						<h2>BAYAR LANGSUNG DITEMPAT</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="https://i.imgur.com/zh4o4TK.png" alt="#">
						</div>
						<h2>PRODUK TERBAIK</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="https://i.imgur.com/BBEiZDl.png" alt="#">
						</div>
						<h2>PENGIRIMAN CEPAT DAN GRATIS</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Bagian Fitur -->


	<!-- Bagian Produk Terbaru -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>Produk Terbaru</h2>
			</div>
			<div class="product-slider owl-carousel">
			<?php 	
				$sql = "SELECT * FROM ikan";
				$tampilIkan = mysqli_query($ikan,$sql);
				$batas = mysqli_num_rows($tampilIkan);
				while($variabel = mysqli_fetch_assoc($tampilIkan)){ ?>
				<?php if (!($batas > 6)) { ?>
				<div class="product-item">
					<div class="pi-pic">	
						<a href="detail_ikan.php?id=<?php echo $variabel['id_ikan']?>"><img src="img/Ikan/<?php echo $variabel['gambar_ikan'];?>"alt="tampil"></a>
						<div class="pi-links">
							<a href="beli.php?id=<?php echo $variabel['id_ikan']?>" class="add-card"><i class="flaticon-bag"></i><span>Beli Sekarang</span></a>
						</div>
					</div>
					<div class="pi-text">
						<?php echo "<h6>". $variabel['harga_ikan']."/kg</h6>"?>
						<?php echo "<p>". $variabel['nama_ikan']."/kg</p>"?>
					</div>
				</div>
			<?php }?>
			<?php $batas--; }?>
			</div>
		</div>
	</section>
	<!-- akhir produk terbaru -->


	<!-- Bagian produk hari ini -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>IKAN HARI INI</h2>
			</div>
			<div class="row">
				<?php	
				$sql = "SELECT * FROM ikan";
				$tampilIkan = mysqli_query($ikan,$sql);
				while($variabel = mysqli_fetch_assoc($tampilIkan)){ ?>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">STOK: 10kg</div>
							<a href="detail_ikan.php?id=<?php echo $variabel['id_ikan']?>"><img src="img/Ikan/<?php echo $variabel['gambar_ikan'];?>" alt=""></a>
							<div class="pi-links">
								<a href="beli.php?id=<?php echo $variabel['id_ikan']?>" class="add-card"><i class="flaticon-bag"></i><span>Beli Sekarang</span></a>
							</div>
						</div>
						<div class="pi-text">
							<?php echo "<h6>". $variabel['harga_ikan']."/kg</h6>"?>
							<?php echo "<p>". $variabel['nama_ikan']."</p>"?>
						</div>
					</div>
				</div>
				<?php }?>
		</div>
	</section>
	<!-- akhir bagian ikan hari ini -->


	<!-- bagian iklan -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">MARI BELI IKAN</div>
				<span>BELI IKAN DI MUGON</span>
				<h2>IKAN-IKAN SEGAR</h2>
				<a href="#" class="site-btn">BELI SEKARANG</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


	<!-- bagian bawah -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img class="site-logo" src="./img/logo.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>MugOn adalah aplikasi tempat menjual ikan-ikan segar yang akan langsung diantar kerumah pembeli, dan pembayaran dilakukan ditempat.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>Ikan Tebaru</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>Ikan terbanyak</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>MugOn Company</p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>Lab Terpadu Unsyiah</p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+62 923 2352 2342</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>MugOn@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp text-center">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
				</div>

<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> MugeeOnline <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">MugOn</a></p>

			</div>
		</div>
	</section>
	<!-- akhir bagian akhir-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

