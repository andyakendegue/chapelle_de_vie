
@extends('home.master')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Site internet de la chapelle de vie" />
<meta name="keywords" content="" />
<title>Chapelle de vie</title>

<link href="css/theme.css" rel="stylesheet" type="text/css" />
<link href="css/woocommerce.css" rel="stylesheet" type="text/css" />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>
<body>

<header>
	 <div class="tm-header-offset">  <!-- Start header offset-->
		<div class="tm-head-a-box tm-medium-padding">
			<div class="uk-container uk-container-center">
				<div class="uk-grid">
					<!-- Start adress widget area -->
					<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 tm-text-left">
						<div class=" uk-hidden-small tm-p-top-medium widget_text">
							<i class="uk-icon-map-marker"></i> 3773 Washington Avenue,<br>Westbury, NY 11590
						</div>
					</div>
					<!-- End adress widget area -->
					<!-- Start top-logo widget area -->
					<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-text-center">
					    <a class="tm-logo" href="index.html"></a>
					</div>
					<!-- End top-logo widget area -->
					<!-- Start social-icons & search widget area -->
					<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 tm-text-right">
						<div class="social-icons clearfix">
							<div class=" uk-hidden-small tm-p-top-medium widget_text">
								<ul class="social-icons">
									<li><a href="http://www.facebook.com" target="_blank"><i class="uk-icon-facebook-f"></i></a></li>
									<li><a href="http://twitter.com/" target="_blank"><i class="uk-icon-twitter"></i></a></li>
									<li><a href="http://plus.google.com/" target="_blank"><i class="uk-icon-google-plus"></i></a></li>
									<li><a href="http://www.linkedin.com" target="_blank"><i class="uk-icon-linkedin"></i></a></li>
									<li><a href="http://www.youtube.com/" target="_blank"><i class="uk-icon-youtube"></i></a></li>
									<li><a href="http://vk.com/" target="_blank"><i class="uk-icon-vk"></i></a></li>
									<li><a href="http://instagram.com/" target="_blank"><i class="uk-icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- End search widget area -->
						<!-- End search widget area -->
					</div>
					<!-- End social-icons widget area -->
				</div>
			</div>
		</div>
		<div style="height: 72px;" class="uk-sticky-placeholder">
			<div style="margin: 0px;" class="tm-fixed-menu" data-uk-sticky="">  <!-- Start fixed menu-->
				<div class="tm-nav-a-box">
					<div class="uk-container uk-container-center">
						<nav class="uk-navbar">
							<!--tm-navbar (hide defolt styles) -->
							<ul class="uk-navbar-nav uk-hidden-small">
								<li class="uk-parent uk-active" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
									<a href="index.html" class="">HOME</a>
									<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-1">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="index-home2.html" class="">HOME 2</a>
													</li>
													<li>
														<a href="index-home3.html" class="">HOME 3</a>
													</li>
													<li>
														<a href="../chocolate/index.html" class="">CHOCOLATE STYLE</a>
													</li>
													<li>
														<a href="../green/index.html" class="">GREEN STYLE</a>
													</li>
													<li>
														<a href="../blue/index.html" class="">BLUE STYLE</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="uk-parent" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
									<a href="about-us.html" class="">ABOUT US</a>
									<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-2">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-2">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="layouts.html" class="">LAYOUTS</a>
													</li>
													<li>
														<a href="offline.html" class="">MAINTENANCE</a>
													</li>
													<li>
														<a href="coming.html" class="">COMING SOON</a>
													</li>
													<li>
														<a href="error.html" class="">ERROR PAGE</a>
													</li>
													<li>
														<a href="single-article.html" class="">SINGLE ARTICLE</a>
													</li>
												</ul>
											</div>
											<div class="uk-width-1-2">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="left-content.html" class="">LEFT + CONTENT</a>
													</li>
													<li>
														<a href="left-right-content.html" class="">LEFT + RIGHT + CONTENT</a>
													</li>
													<li>
														<a href="left-content-right.html" class="">LEFT + CONTENT + RIGHT</a>
													</li>
													<li>
														<a href="content-right.html" class="">CONTENT + RIGHT</a>
													</li>
													<li>
														<a href="content-left-right.html" class="">CONTENT + LEFT + RIGHT</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="uk-parent" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
									<a href="event.html" class="">EVENT</a>
									<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-1">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="event-list.html" class="">EVENT LIST</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
									<li>
										<a href="sermons.html" class="">SERMONS</a>
									</li>
									<li class="uk-parent" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
										<a href="blog.html" class="">BLOG</a>
										<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
											<div class="uk-grid uk-dropdown-grid">
												<div class="uk-width-1-1">
													<ul class="uk-nav uk-nav-navbar">
														<li>
															<a href="our-pastors.html" class="">OUR PASTORS</a>
														</li>
														<li>
															<a href="testimonials.html" class="">TESTIMONIALS</a>
														</li>
														<li>
															<a href="faq.html" class="">HELP</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li>
										<a href="gallery.html" class="">GALLERY</a>
									</li>
									<li>
										<a href="donations.html" class="">DONATIONS</a>
									</li>
									<li>
										<a href="shop.html" class="">SHOP</a>
									</li>
									<li>
										<a href="contact-us.html" class="">CONTACT US</a>
									</li>
								</ul>
								<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- End fixed menu-->
		<div class="breadcrumbs">
			<div class="uk-container uk-container-center breadcrumbs-box"></div>
		</div>
	</div>  <!-- End header offset-->
</header>

@if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
@endif
