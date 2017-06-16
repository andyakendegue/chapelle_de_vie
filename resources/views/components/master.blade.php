<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Site internet de la chapelle de vie" />
<meta name="keywords" content="" />
<title>@yield('title')</title>

<link href="css/theme.css" rel="stylesheet" type="text/css" />
<link href="css/woocommerce.css" rel="stylesheet" type="text/css" />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<!-- Styles -->
<style>
		html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Raleway', sans-serif;
				font-weight: 100;
				height: 100vh;
				margin: 0;
		}

		.full-height {
				height: 100vh;
		}

		.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
		}

		.position-ref {
				position: relative;
		}

		.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
		}

		.content {
				text-align: center;
		}

		.title {
				font-size: 84px;
		}

		.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
		}

		.m-b-md {
				margin-bottom: 30px;
		}
</style>
</head>
<body>

<header>

	 <div class="tm-header-offset">  <!-- Start header offset-->
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
										<a href="/contact" class="">CONTACT US</a>
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



@yield('content')

<div class="tm-footer-top-box tm-dark-bg">
    <div class="uk-container uk-container-center">
        <!-- start full width -->
        <section class="tm-footer-top uk-grid tm-xlarge-padding" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
            <div class="uk-width-1-1 uk-width-large-1-3">
                <div class="uk-panel widget_text" >
                    <h3 class="uk-panel-title">À Propos de nous</h3>
                    <p>In vitae velit mauris. Donec sodales posuere pretium. Suspendisse dolor tortor, fringilla sed feugiat quis, imperdiet vitae tortor. Suspendisse et magna ligula. Ut nec facilisis lectus. Maecenas venenatis sem aliquam, tempor ante ut, facilisis ... </p>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-large-1-3">
                <div class="uk-panel widget_text" >
                    <h3 class="uk-panel-title">Links</h3>
                    <ul class="footer-links">
                        <li>
                            <a href="http://www.facebook.com" target="_blank">In vitae velit mauris</a>
                        </li>
                        <li>
                            <a href="http://twitter.com/" target="_blank">Lorem ipsum dolor</a>
                        </li>
                        <li>
                            <a href="http://plus.google.com/" target="_blank">Donec vitae tortor</a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com" target="_blank">Donec magna sapien</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-large-1-3">
                <div class="uk-panel widget_text" >
                    <h3 class="uk-panel-title">Newsletter</h3>
                    <p>Inscrivez-vous à notre newsletter et recevez régulièrement nos bulletins d'informations sur la congrégation...</p>
                    <div class="subscribe">
                        <div role="form" class="wpcf7" id="wpcf7-f405-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form method="post" class="wpcf7-form newsletter" novalidate="novalidate">
                                <div style="display: none;">
																	<input type="hidden" name="_token" value="@php echo csrf_token() @endphp">
                                    <input type="hidden" name="_wpcf7" value="405" />
                                    <input type="hidden" name="_wpcf7_version" value="4.3" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f405-o1" />
                                    <input type="hidden" name="_wpnonce" value="7eb6dd6d20" />
                                </div>
                                <div class="uk-grid uk-grid-small" >
                                    <div class="uk-grid-width-small-4-6 uk-width-medium-4-6 uk-grid-width-large-4-6">
                                        <span class="wpcf7-form-control-wrap email-639">
                                            <input type="email" name="email-639" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Votre email" />
                                        </span>
                                    </div>
                                    <div class="uk-grid-width-small-2-6 uk-width-medium-2-6 uk-grid-width-large-2-6">
                                        <input type="submit" value="Enregistrer" class="wpcf7-form-control wpcf7-submit" />
                                    </div>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end full width -->
</div>

<footer class="tm-footer-box tm-none-bg tm-none-padding">

    <div class="uk-container uk-container-center">
        <div class="tm-footer uk-grid">
            <div class="uk-width-1-1 uk-width-large-1-2">
                <div class="uk-panel tm-p-medium  widget_text">
                    <div class="tm-text-left">
                        © @php echo date('Y'); @endphp Chapelle de vie. Tous droits réservés.
                    </div>
                </div>
            </div>

            <div class="uk-hidden-small uk-hidden-medium uk-width-large-1-2">
                <div class="uk-panel uk-hidden-medium uk-hidden-small tm-p-medium  widget_text">
                    <div class="tm-text-right">
                        <ul class="social-icons">
                            <li><a href="http://www.facebook.com" target="_blank"><i class="uk-icon-facebook-f"></i></a>
                            </li>
                            <li><a href="http://twitter.com/" target="_blank"><i class="uk-icon-twitter"></i></a>
                            </li>
                            <li><a href="http://plus.google.com/" target="_blank"><i class="uk-icon-google-plus"></i></a>
                            </li>
                            <li><a href="http://www.linkedin.com" target="_blank"><i class="uk-icon-linkedin"></i></a>
                            </li>
                            <li><a href="http://www.youtube.com/" target="_blank"><i class="uk-icon-youtube"></i></a>
                            </li>
                            <li><a href="http://vk.com/" target="_blank"><i class="uk-icon-vk"></i></a>
                            </li>
                            <li><a href="http://instagram.com/" target="_blank"><i class="uk-icon-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end full width -->
</footer>

<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <div class="uk-panel widget_search">
            <form class="uk-search" id="search-3" method="get" role="search">
                <input class="uk-search-field" type="text" value="" name="s" placeholder="search...">
            </form>
        </div>
        <ul class="uk-nav uk-nav-offcanvas">
            <li class="uk-parent"><a href="index.html" class="">HOME</a>
                <ul class="uk-nav-sub">
                    <li><a href="index-home2.html" class="">HOME 2</a>
                    </li>
                    <li><a href="index-home3.html" class="">HOME 3</a>
                    </li>
                    <li><a href="../chocolate/index.html" class="">CHOCOLATE STYLE</a>
                    </li>
                    <li><a href="../blue/index.html" class="">GREEN STYLE</a>
                    </li>
                    <li><a href="../green/index.html" class="">BLUE STYLE</a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent"><a href="about-us.html" class="">ABOUT US</a>
                <ul class="uk-nav-sub">
                    <li><a href="layouts.html" class="">LAYOUTS</a>
                    </li>
                    <li><a href="offline.html" class="">MAINTENANCE</a>
                    </li>
                    <li><a href="coming.html" class="">COMING SOON</a>
                    </li>
                    <li><a href="error.html" class="">ERROR PAGE</a>
                    </li>
                    <li><a href="single-article.html" class="">SINGLE ARTICLE</a>
                    </li>
                    <li><a href="left-content.html" class="">LEFT + CONTENT</a>
                    </li>
                    <li><a href="left-right-content.html" class="">LEFT + RIGHT + CONTENT</a>
                    </li>
                    <li><a href="left-content-right.html" class="">LEFT + CONTENT + RIGHT</a>
                    </li>
                    <li><a href="content-right.html" class="">CONTENT + RIGHT</a>
                    </li>
                    <li><a href="content-left-right.html" class="">CONTENT + LEFT + RIGHT</a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent"><a href="event.html" class="">EVENT</a>
                <ul class="uk-nav-sub">
                    <li><a href="event-list.html" class="">EVENT LIST</a>
                    </li>
                </ul>
            </li>
            <li><a href="sermons.html" class="">SERMONS</a>
            </li>
            <li class="uk-parent"><a href="blog.html" class="">BLOG</a>
                <ul class="uk-nav-sub">
                    <li><a href="our-pastors.html" class="">OUR PASTORS</a>
                    </li>
                    <li><a href="testimonials.html" class="">TESTIMONIALS</a>
                    </li>
                    <li><a href="faq.html" class="">HELP</a>
                    </li>
                </ul>
            </li>
            <li><a href="gallery.html" class="">GALLERY</a>
            </li>
            <li><a href="donations.html" class="">DONATIONS</a>
            </li>
            <li><a href="shop.html" class="">SHOP</a>
            </li>
            <li><a href="contact-us.html" class="">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideshow-fx.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/components/accordion.js"></script>
<script type="text/javascript" src="js/countdown.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/sortable.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/mail.js"></script>


</body>
</html>
