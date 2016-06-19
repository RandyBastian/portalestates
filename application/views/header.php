<!DOCTYPE html>
<html lang="en">
<head>
		<title><?php if(!empty($title)) echo $title; ?> | Portal Estates</title>
		<meta charset="utf-8">
		<!--[if IE]>
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- All Stylesheets -->
		<link href="<?php echo site_url();?>assets/frontend/css/all-stylesheets.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->		
		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php echo site_url();?>assets/frontend/images/icons/favicon/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo site_url();?>assets/frontend/images/icons/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url();?>assets/frontend/images/icons/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url();?>assets/frontend/images/icons/favicon/apple-touch-icon-114x114.png">
	</head>
	<body>
		<!-- HEADER STARTS
			========================================================================= -->
		<header>
			<!-- TOP ROW STARTS -->
			<div class="top-nav hidden-sm hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							
						</div>
						<div class="col-lg-6 col-md-6">
							<ul class="small-nav">
								<li><a href="<?php echo site_url('login');?>">LOGIN</a></li>
								<li><a href="<?php echo site_url('sitemap');?>">SITE MAP</a></li>
								<li><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- TOP ROW ENDS -->
			<!-- LOGO & ADS STARTS -->
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-2 logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url();?>assets/frontend/images/logo.png" alt=""></a></div>
					<div class="col-lg-8 col-md-10">
						<div class="ad-728x90 visible-lg visible-md"><img src="<?php echo site_url();?>assets/frontend/images/images/ads/728x90/3d_728x90_v2.gif" alt=""></div>
						<div class="ad-468x60 visible-sm"><img src="<?php echo site_url();?>assets/frontend/images/images/ads/468x60/3d_468x60_v4.gif" alt=""></div>
					</div>
				</div>
			</div>
			<!-- LOGO & ADS ENDS -->
		</header>
		<!-- /. HEADER ENDS
			========================================================================= -->
		<!-- MOBILE MENU BUTTON STARTS
			========================================================================= -->
		<div id="mobile-header">
			<a id="responsive-menu-button" href="#sidr-main"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></a>
		</div>
		<!-- /. MOBILE MENU BUTTON ENDS
			========================================================================= -->
		<!-- NAVIGATION STARTS
			========================================================================= -->
		<nav id="navigation">
			<div class="navbar yamm navbar-inverse" role="navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="navbar-header">								
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" > <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>				
							</div>
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav">
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="<?php echo site_url('category'); ?>">APARTMENT</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Apartment Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Apartment/1.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">APARTMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Apartment/2.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">APARTMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Apartment/3.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">APARTMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Apartment/4.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">APARTMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Apartment Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="<?php echo site_url('category'); ?>">DECORATION</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- decorations Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-2">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/1.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DECORATION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/2.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DECORATION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/3.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DECORATION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/4.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DECORATION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/5.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DECORATION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/6.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DECORATION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category');?>">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- decorations Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="<?php echo site_url('category'); ?>">DESIGN</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Development Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Design/4.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DESIGN</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Design/5.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DESIGN</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Design/6.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DESIGN</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Design/7.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DESIGN</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Development Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="<?php echo site_url('category'); ?>">DEVELOPMENT</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Development Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-4 col-md-4">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Development/1.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DEVELOPMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-4 col-md-4">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Development/2.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DEVELOPMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-4 col-md-4">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Development/3.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">DEVELOPMENT</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Development Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="<?php echo site_url('category'); ?>">HOME</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Home Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm video">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Apartment/9.jpg" class="img-responsive" alt="" >											
																	<h2 class="overlay-category">HOME</h2>
																	<div class="play-icon"><img src="<?php echo base_url(); ?>assets/frontend/images/images/icons/video-icon.png" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/food/2.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">HOME</h2>
																	<div class="play-icon"><img src="<?php echo base_url(); ?>assets/frontend/images/images/icons/video-icon.png" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/decorations/7.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">HOME</h2>
																	<div class="play-icon"><img src="<?php echo base_url(); ?>assets/frontend/images/images/icons/video-icon.png" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Design/2.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">HOME</h2>
																	<div class="play-icon"><img src="<?php echo base_url(); ?>assets/frontend/images/images/icons/video-icon.png" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Home Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="<?php echo site_url('category'); ?>">LAND</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Land Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Land/2.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LAND</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Land/3.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LAND</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Land/5.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LAND</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="<?php echo base_url(); ?>assets/frontend/images/images/Land/6.jpg" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LAND</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="<?php echo site_url('category'); ?>">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Land Mega Menu Ends -->
									</li>
									<li class="visible-xs"><a href="<?php echo site_url('login'); ?>">LOGIN</a></li>
									<li class="visible-xs"><a href="<?php echo site_url('sitemap'); ?>">SITE MAP</a></li>
									<li class="visible-xs"><a href="<?php echo site_url('contact'); ?>">CONTACT</a></li>
								</ul>
								<!-- Search Starts -->
								<div class="nav-icon pull-right">                                    
									<input type="search" value="" name="" class="s" placeholder="Search...">                                    
								</div>
								<!-- Search Ends -->
							</div>
							<!--/.nav-collapse --> 
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
<!-- NEWS STARTS
			========================================================================= -->
		<section class="breaking-news">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-md-1">
						<h2 class="title">News</h2>
					</div>
					<div class="col-lg-11 col-md-11">
						<div class="newsticker">
							<div><a href="#">Senectus et netus et malesuada Pellentesque habitant morbi senectus et netus et malesuada</a></div>
							<div><a href="#">Pellentesque habitant morbi senectus et netus et malesuada et netus et malesuada netus et</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /. NEWS ENDS
			========================================================================= -->