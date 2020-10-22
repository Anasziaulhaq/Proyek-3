<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

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
							<h3></h3><span></span></a>
					</div>
					<div class="main-menu">
						<nav class="navbar navbar-expand-md align-items-start">

							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
						</button>

							<div class="navbar-collapse align-items-start collapse" id="karl-navbar" style="">
								<ul class="navbar-nav animated" id="nav">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">
											<span class="trn">home</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="shop.html">
											<span class="trn">shop</span>
										</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="filter filter-category">
						<h5><span class="trn">category</span></h5>
						<div class="categor-list">
							<span class="category-item">
								<label class="container-checkbox">
									<span class="trn">Makanan</span>
								<input type="checkbox" checked="true">
									<span class="checkmark"></span>
							</label>
							</span>
							<span class="category-item">
								<label class="container-checkbox">
									<span class="trn">Minuman</span>
								<input type="checkbox" checked="true">
									<span class="checkmark"></span>
							</label>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="row">
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
									<span class="trn">idr</span> 20.000,00
								</h4>
								<p><a href="details.html" class="product-name">Bakso</a></p>
								<!-- Add to Cart -->
								<a href="cart.html" class="add-to-cart-btn">
									<span class="trn">add_to_cart</span>
								</a>
							</div>
						</div>
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
									<span class="trn">idr</span> 10.000,00
								</h4>
								<p><a href="details.html" class="product-name">Pecel Mbok Bari</a></p>
								<!-- Add to Cart -->
								<a href="cart.html" class="add-to-cart-btn">
									<span class="trn">add_to_cart</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 product">
							<div class="product-img">
								<img src="img/Rawon.jpg">
								<div class="img-cover">
									<a href="details.html" class="view-btn">
								<i class="fa fa-eye"></i>
							</a>
								</div>
							</div>
							<div class="product-description">
								<h4 class="product-price">
									<span class="trn">idr</span> 20.000,00
								</h4>
								<p><a href="details.html" class="product-name">Rawon</a></p>
								<!-- Add to Cart -->
								<a href="cart.html" class="add-to-cart-btn">
									<span class="trn">add_to_cart</span>
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
									<span class="trn">idr</span> 8.000,00
								</h4>
								<p><a href="details.html" class="product-name">Es Mini</a></p>
								<!-- Add to Cart -->
								<a href="cart.html" class="add-to-cart-btn">
									<span class="trn">add_to_cart</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 product">
							<div class="product-img">
								<img src="img/soto.jpg">
								<div class="img-cover">
									<a href="details.html" class="view-btn">
								<i class="fa fa-eye"></i>
							</a>
								</div>
							</div>
							<div class="product-description">
								<h4 class="product-price">
									<span class="trn">idr</span> 15.000,00
								</h4>
								<p><a href="details.html" class="product-name">Soto</a></p>
								<!-- Add to Cart -->
								<a href="cart.html" class="add-to-cart-btn">
									<span class="trn">add_to_cart</span>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 product">
							<div class="product-img">
								<img src="img/rujak.jpg">
								<div class="img-cover">
									<a href="details.html" class="view-btn">
								<i class="fa fa-eye"></i>
							</a>
								</div>
							</div>
							<div class="product-description">
								<h4 class="product-price">
									<span class="trn">idr</span> 10.000,00
								</h4>
								<p><a href="details.html" class="product-name">Rujak</a></p>
								<!-- Add to Cart -->
								<a href="cart.html" class="add-to-cart-btn">
									<span class="trn">add_to_cart</span>
								</a>
							</div>
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
						<h1>Halo</h1>
						<span>Clothes Shop</span>
					</div>
					<p>Copyright &copy;2018 All right reserved</p>
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
</body>
	<script src="assets/js/translate.js"></script>

</html>
