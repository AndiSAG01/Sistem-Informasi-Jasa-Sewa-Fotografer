<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Admin Dashboard Templates - Galaxy Admin Template</title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="/assets/images/favicon.svg" />


		<!-- *************
			************ CSS Files *************
		************* -->
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="/assets/fonts/icomoon/style.css" />

		<!-- Main CSS -->
		<link rel="stylesheet" href="/assets/css/main.min.css" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->
		@vite('resources/js/app.js')
		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="/assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

		<style>
			/* Mengatur warna teks pada textarea CKEditor menjadi hitam */
			.ck-content {
				color: black;
			}
			.form-control option {
				color: black; /* Mengatur warna teks untuk opsi dalam elemen select */
			}
			
		</style>
	</head>

	<body>
		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				<nav id="sidebar" class="sidebar-wrapper" style="background-color: black">

					<!-- App brand starts -->
					<div class="app-brand px-3 py-2 d-flex align-items-center">
						<a href="index.html">
							<img src="/asset/img/logo/logo.jpg" class="logo" width="500px" alt="Bootstrap Gallery" />
						</a>
					</div>
					<!-- App brand ends -->

					@include('partials.sidebar')

				</nav>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">

					<!-- App header starts -->
					<div class="app-header d-flex align-items-center" style="background-color: black">

						<!-- Toggle buttons start -->
						<div class="d-flex">
							<button class="btn btn-outline-light toggle-sidebar" id="toggle-sidebar">
								<i class="icon-menu"></i>
							</button>
							<button class="btn btn-outline-light pin-sidebar" id="pin-sidebar">
								<i class="icon-menu"></i>
							</button>
						</div>
						<!-- Toggle buttons end -->

						<!-- App brand sm start -->
						<div class="app-brand-sm d-md-none d-sm-block">
							<a href="index.html">
								<img src="/assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
							</a>
						</div>
						<!-- App brand sm end -->

						

						<!-- App header actions start -->
						<div class="header-actions">
							<div class="dropdown d-sm-flex d-none">
								<a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="icon-shopping-cart fs-4 lh-1"></i>
									<span class="count rounded-circle bg-danger">9</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
									<h5 class="fw-semibold px-3 py-2 m-0">Orders</h5>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<div class="p-3 bg-danger border border-danger rounded-circle me-3">
												MS
											</div>
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Moory Sammy</h6>
												<p class="mb-1">Ordered an iPhone.</p>
												<p class="small m-0 opacity-50">3 Mins Ago</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<div class="p-3 bg-primary border border-primary rounded-circle me-3">
												KY
											</div>
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Kyle Yomaha</h6>
												<p class="mb-1">Purchased a MacBook.</p>
												<p class="small m-0 opacity-50">5 Mins Ago</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<div class="p-3 bg-success border border-success rounded-circle me-3">
												SB
											</div>
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Srinu Basava</h6>
												<p class="mb-1">Purchased a NotePad.</p>
												<p class="small m-0 opacity-50">7 Mins Ago</p>
											</div>
										</div>
									</a>
									<div class="d-grid p-3 border-top">
										<a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
									</div>
								</div>
							</div>
							<div class="dropdown ms-2">
								<a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<span>Fuzail Malik</span>
									<img src="/assets/images/user3.png" class="img-3x m-2 me-0 rounded-3" alt="Admin Templates" />
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
									<a class="dropdown-item d-flex align-items-center py-2" href="profile.html"><i
											class="icon-gitlab fs-4 me-3"></i>User Profile</a>
									<a class="dropdown-item d-flex align-items-center py-2" href="account-settings.html"><i
											class="icon-settings fs-4 me-3"></i>Account Settings</a>
									<a class="dropdown-item d-flex align-items-center py-2" href="login.html"><i
											class="icon-log-out fs-4 me-3"></i>Logout</a>
								</div>
							</div>
						</div>
						<!-- App header actions end -->

					</div>
					<!-- App header ends -->

					<!-- App body starts -->
					<div class="app-body" style="background-color: rgb(157, 157, 157)">

						<!-- Container starts -->
						<div class="container-fluid">

							

							@yield('content')

						</div>
						<!-- Container ends -->

					</div>
					<!-- App body ends -->

					<!-- App footer start -->
					<div class="app-footer" style="background-color: black">
						<span class="text-white">© AKAR</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/bootstrap.bundle.min.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="/assets/vendor/apex/apexcharts.min.js"></script>
		<script src="/assets/vendor/apex/custom/home/incomeData.js"></script>
		<script src="/assets/vendor/apex/custom/home/usersData.js"></script>
		<script src="/assets/vendor/apex/custom/home/ordersData.js"></script>
		<script src="/assets/vendor/apex/custom/home/conversionData.js"></script>
		<script src="/assets/vendor/apex/custom/home/paymentsData.js"></script>
		<script src="/assets/vendor/apex/custom/home/sparklineData.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


		<!-- Rating -->
		<script src="/assets/vendor/rating/raty.js"></script>
		<script src="/assets/vendor/rating/raty-custom.js"></script>

		<!-- Custom JS files -->
		<script src="/assets/js/custom.js"></script>
		
		<script>
			$('#deskripsi').summernote({
			  placeholder: 'deskripsi',
			  tabsize: 2,
			  height: 00
			});
		  </script>
	</body>

</html>