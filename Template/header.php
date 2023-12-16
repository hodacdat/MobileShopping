<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Mobile Shopping PHP</title>

<!--Bootstrap CDN-->
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
	crossorigin="anonymous" />
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!--Owl Carousel CDN-->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
	integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
	integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--fontawsome icon-->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
	integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--Custom css file-->
<link rel="stylesheet" href="style.css" />

<?php
require 'functions.php';
?>


</head>
<body>
	<!--Header-->
	<header id="header">
		<div class="strip d-flex justify-content-between px-4 py-1 bg-light">
			<p class="font-rale font-size-20 text-black-50">Jodan Calderon
				430-985 Eleifend St. Duluth Washington 92166 +84 338569127</p>
			<div class="font-rale font-size-20">
				<a href="#" class="px-3 border-right border-left text-dark">Login</a>
				<a href="#" class="px-3 border-right text-dark">Whistlist (0)</a>
			</div>
		</div>

		<!--Origin navigation bar-->
		<nav class="navbar navbar-expand-lg color-second-bg">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">Mobile Shopping</a>
				<button class="navbar-toggler" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto font-rubik mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#">On Sale</a></li>
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#">Category</a></li>
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#">Product</a></li>
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#">Blog</a></li>
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#">Category</a></li>
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#">Coming Soon</a></li>
						<form action="#" class="font-size-14 font-rale">
							<a href="cart.php" class="py-2 rounded-pill color-primary-bg"> <span
								class="font-size-16 px-2 text-white"><i
									class="fas fa-shopping-cart"></i></span> <span
								class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'))?></span>
							</a>
						</form>
						<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
							href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false"> Dropdown </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider" /></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul></li>
						<li class="nav-item"><a class="nav-link disabled"
							aria-disabled="true">Disabled</a></li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search"
							placeholder="Search" aria-label="Search" />
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<!--Header-->

	<!--Body-->
	<main id="main-site">