<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ route('Home') }}" class="logo">
						<img src="/icon/zonkart-icon.jpg" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{ route('Home') }}">Home</a>
							</li>

							<li>
								<a href="{{ route('Product') }}">Shop</a>
							</li>
							
							<li>
								<a href="{{ route('Blog') }}">Blog</a>
							</li>

							<li class="active-menu">
								<a href="{{ route('About') }}">About</a>
							</li>

							<li>
								<a href="{{ route('Contact') }}">Contact</a>
							</li>
						</ul>
					</div>	
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{ route('Home') }}"><img src="/icon/zonkart-icon.jpg" alt="IMG-LOGO"></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="{{ route('Home') }}">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="{{ route('Product') }}">Shop</a>
				</li>

				<li>
					<a href="{{ route('Blog') }}">Blog</a>
				</li>

				<li>
					<a href="{{ route('About') }}">About</a>
				</li>

				<li>
					<a href="{{ route('Contact') }}">Contact</a>
				</li>
			</ul>
		</div>
	</header>
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	
	
		

<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Women
						</a>
					</li>

					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Men
						</a>
					</li>

					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Shoes
						</a>
					</li>

					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Watches
						</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					GET IN TOUCH
				</h4>

				<div class="p-t-27">
					<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa fa-facebook"></i>
					</a>

					<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>

			<p class="stext-107 cl6 txt-center">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://z0nkart.blogspot.com" target="_blank">ZonKart</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</p>
		</div>
	</div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="zmdi zmdi-chevron-up"></i>
	</span>
</div>



<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
	})
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="vendor/parallax100/parallax100.js"></script>
<script>
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
	$('.gallery-lb').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled:true
			},
			mainClass: 'mfp-fade'
		});
	});
</script>
<!--===============================================================================================-->
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
	$('.js-addwish-b2').on('click', function(e){
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function(){
		var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-b2');
			$(this).off('click');
		});
	});

	$('.js-addwish-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

	/*---------------------------------------------*/

	$('.js-addcart-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to cart !", "success");
		});
	});
</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
	$('.js-pscroll').each(function(){
		$(this).css('position','relative');
		$(this).css('overflow','hidden');
		var ps = new PerfectScrollbar(this, {
			wheelSpeed: 1,
			scrollingThreshold: 1000,
			wheelPropagation: false,
		});

		$(window).on('resize', function(){
			ps.update();
		})
	});
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>