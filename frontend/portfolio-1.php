<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Sharad Vyas Photography</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<?php include('../config.php'); ?>
<header class="header-section hs-bd">
    <a href="<?php echo BASE_URL; ?>index.php" class="site-logo"><img src="<?php echo BASE_URL; ?>img/vyasjilogonew.png" alt="logo"></a>
    <div class="header-controls">
        <button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
        <button class="search-btn"><i class="fa fa-search"></i></button>
    </div>
    <ul class="main-menu">
        <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/about.php">About the Artist</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/portfolio-1.php">Portfolio</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/gallery-folder.php">Folder Gallery</a></li>
        <li><a href="<?php echo BASE_URL; ?>frontend/contact.php">Contact</a></li>
    </ul>
</header>
	<div class="clearfix"></div>
	<!-- Header section end  -->

	<!-- Portfolio section  -->
	<div class="portfolio-2-section">
		<ul class="portfolio-filter pf-2 controls">
			<li class="control" data-filter="all">All</li>
			<li class="control" data-filter=".nature">Nature</li>
			<li class="control" data-filter=".studio">Studio Photography</li>
			<li class="control" data-filter=".weddings">Weddings</li>
			<li class="control" data-filter=".lifestyle">Lifestyle</li>
			<li class="control" data-filter=".fashion">Fashion</li>
		</ul>
		<div class="portfolio-warp">
			<div class="row portfolio-gallery m-0">
				<div class="mix col-lg-4 col-sm-6 p-0 nature">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/1.jpg"></div>
						<h6>Shadow in the water</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 studio">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/2.jpg"></div>
						<h6>Winter in the Mountains</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 weddings">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/3.jpg"></div>
						<h6>Pink Flamingo</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 lifestyle">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/6.jpg"></div>
						<h6>Shadow in the water</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 fashion">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/4.jpg"></div>
						<h6>Winter in the Mountains</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 nature">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/5.jpg"></div>
						<h6>Pink Flamingo</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 studio">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/8.jpg"></div>
						<h6>Shadow in the water</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 weddings">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/10.jpg"></div>
						<h6>Winter in the Mountains</h6>
						<p>2019</p>
					</div>
				</div>
				<div class="mix col-lg-4 col-sm-6 p-0 lifestyle">
					<div class="portfolio-box">
						<div class="portfolio-item set-bg" data-setbg="../img/portfolio/13.jpg"></div>
						<h6>Pink Flamingo</h6>
						<p>2019</p>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
			<button class="site-btn">Load More</button>
		</div>
	</div>
	<!-- Portfolio section end  -->
	
	<!-- Footer section   -->
	<footer class="footer-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 order-1 order-md-2">
					<div class="footer-social-links">
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-behance"></i></a>
					</div>
				</div>
				<div class="col-md-6 order-2 order-md-1">
					<div class="copyright">
  <!-- Link back to Versai Technology can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://versai.com" target="_blank">Versai Technology</a>
  <!-- Link back to Versai Technology can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end  -->

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/instafeed.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>