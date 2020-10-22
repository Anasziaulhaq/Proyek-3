<?php  
    include ("koneksi.php");
    session_start();

?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Makam Bung Karno</title>

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

	<!-- css -->
	<link rel="stylesheet" href="assets/css/master.css">
	<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/font-awesome/css/fontawesome-all.css">

	<!-- js -->
	<script src="dist/js/jquery.min.js" charset="utf-8"></script>
	<script src="dist/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
	<script src="dist/js/jquery.translate.js"></script>
	<script src="dist/js/jquery.cookie.js"></script>
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-12 d-md-flex justify-content-between">
					<div class="logo-area text-center">
						<a href="index.html">
							<span>Makam</span><h4>Bung Karno</h4></a>
					</div>
					<div class="main-menu">
						<nav class="navbar navbar-expand-md align-items-start">

							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
						</button>

							<div class="navbar-collapse align-items-start collapse" id="karl-navbar" style="">
								<ul class="navbar-nav animated" id="nav">
									<li class="nav-item active">
										<a class="nav-link" href="beranda.php">
											<span class="trn">Beranda</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="katalog.php">
											<span class="trn">Katalog</span>
										</a>
										<li class="nav-item">
										<a class="nav-link" href="halogin.php">
											<span class="trn">Login</span>
										</a>
								</ul>
								<ul class="navbar-nav ml-auto ml-md-0">
									<li class="nav-item dropdown no-arrow">
										<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-user-circle fa-fw"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
										<p class="dropdown-item"><a>User : </a><?php echo $_SESSION['username']; ?></p>
										<p class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</p>
										</div>
									</li>
									</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="welcome-area">
		<div class="welcome-text text-center">
			<div class="container">
				<h1><span class="trn">welcome</span>
					<div class="logo">
						<h1>Makam</h1>
						<span>BUNG KARNO</span>
					</div>
				</h1>
			</div>
		</div>
	</div>
	<div class="product-list">
		<div class="container">
			<div class="content-title text-center">
				<h1><span class="trn">Produk Terbaru</span></h1>
			</div>
			<div class="category-button text-center">
				
					<span class="trn">Makanan</span>
				
					<span class="trn">Dan</span>
				
				
					<span class="trn">Minuman</span>
				
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 product">
					<div class="product-img">
						<img src="img/pecel.jpg">
						<div class="img-cover">
							<a href="details.html" class="view-btn">
								<i class="fa fa-eye"></i>
							</a>
						</div>
					</div>
					<div class="product-description">
						<h4 class="product-price">
							<span class="trn"></span> 
						</h4>
						<p><a href="details.html" class="product-name">Nasi Pecel Mbok Bari</a></p>
						<!-- Add to Cart -->
						<a href="cart.html" class="add-to-cart-btn">
							<span class="trn">Detail</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 product">
					<div class="product-img">
						<img src="img/esmini.jpg">
						<div class="img-cover">
							<a href="details.html" class="view-btn">
								<i class="fa fa-eye"></i>
							</a>
						</div>
					</div>
					<div class="product-description">
						<h4 class="product-price">
							<span class="trn"></span>  
						</h4>
						<p><a href="details.html" class="product-name">Es Mini Blitar</a></p>
						<!-- Add to Cart -->
						<a href="cart.html" class="add-to-cart-btn">
							<span class="trn">Datail</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 product">
					<div class="product-img">
						<img src="img/bakso.jpeg">
						<div class="img-cover">
							<a href="details.html" class="view-btn">
								<i class="fa fa-eye"></i>
							</a>
						</div>
					</div>
					<div class="product-description">
						<h4 class="product-price">
							<span class="trn"></span>
						</h4>
						<p><a href="details.html" class="product-name">Bakso Blitar</a></p>
						<!-- Add to Cart -->
						<a href="cart.html" class="add-to-cart-btn">
							<span class="trn">Detail</span>
						</a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6 copyright">
					<div class="logo-small no-border">
						<span>MAKAM</span>
						<span>BUNG KARNO</span>
					</div>
					<p>Copyright &copy;2020 All right reserved</p>
				</div>
				<div class="col-md-3">
					<ul class="vertical-link">
						<li>
							<a href="#">
							<span class="trn">about</span>
							</a>
						</li>
<!--						<li><a href="#">FAQ</a></li>-->
						<li>
							<a href="#">
								<span class="trn">contact</span>
							</a>
						</li>
						<li><a href="#"><span class="trn">privacy_policy</span></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="vertical-link">
						<li>
							<a href="#">
								<span class="social-icon"><i class="fab fa-facebook"></i></span>
								 Facebook</a>
						</li>
						<li>
							<a href="#">
								<span class="social-icon"><i class="fab fa-google-plus-g"></i></span>
									Twitter</a>
						</li>
						<li>
							<a href="#">
								<span class="social-icon"><i class="fab fa-twitter"></i></span>
								Google+</a>
						</li>
						<li>
							<a href="#">
								<span class="social-icon"><i class="fab fa-instagram"></i></span>
								Instagram</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" jika ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

</body>
	<script src="assets/js/translate.js"></script>

</html>
	<?php  ?>