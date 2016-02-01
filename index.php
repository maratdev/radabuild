<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RADA BUILD - Строительная компания</title>

    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="page" class="hfeed site"><!-- start page wrapper -->
		<!-- <div id="preloader"></div> -->
		<header id="masthead" class="site-header navbar-fixed-top">
    		<div class="header-navigation">
    			<div class="container-fluid">
    				<div class="row">
						<?php include_once("block/menu.php"); ?>
						<div class="header-feature">
    						<a href="contact.html" class="btn btn-lg btn-default">Get a Quote</a>
    					</div><!-- end header-feature -->
    				</div><!-- end row -->
    			</div><!-- end container-fluid -->
    		</div><!-- end header-navigation -->
    	</header><!-- end #masthead -->
	  <!-- CAROUSEL SECTION -->
    	<div id="carousel-home" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
		    	<li data-target="#carousel-home" data-slide-to="1"></li>
		    	<li data-target="#carousel-home" data-slide-to="2"></li>
		  	</ol>
		 
		  	<!-- Wrapper for slides -->
		  	<div class="carousel-inner">
		    	<div class="item active">
		      		<img src="images/content/slider-03.png" alt="">
		      		<div class="carousel-caption">
		      			<h3>Your Trust is Our Foundation to Build</h3>
		      			<a href="#" class="btn btn-sm btn-default">VIEW OUR PORTFOLIO <i class="fa fa-fw fa-long-arrow-right"></i></a>
		      		</div>
		    	</div>

			    <div class="item">
			      	<img src="images/content/slider-02.png" alt="">
			      	<div class="carousel-caption">
			      		<h3>Mazim Placerat Facer Possim Assum</h3>
			      		<a href="#" class="btn btn-sm btn-default">LEARN MORE <i class="fa fa-fw fa-long-arrow-right"></i></a>
			      	</div>
			    </div>
			    <div class="item">
			      	<img src="images/content/slider-03.png" alt="">
			      	<div class="carousel-caption">
			      		<h3>Typi Non Habent Claritatem Insitam</h3>
			      		<a href="#" class="btn btn-sm btn-default">LEARN MORE <i class="fa fa-fw fa-long-arrow-right"></i></a>
			      	</div>
			    </div>
			</div><!-- end carousel inner -->
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
				<span class="fa fa-fw fa-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
			    <span class="fa fa-fw fa-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	  <section class="home-service">
			<div class="container">
				<div class="row">

					<div class="col-service">
						<span class="small-icon">
							<i class="fa fa-fw fa-group"></i>
						</span>
						<div class="small-icon-text">
							<h4>Professional Team</h4>
							<p>Claritas est etiam processus dynamic, qui sequitur mutationem consetudium lectorum.</p>
						</div><!-- end text -->
					</div><!-- end column -->

					<div class="col-service">
						<span class="small-icon">
							<i class="fa fa-fw fa-gears"></i>
						</span>
						<div class="small-icon-text">
							<h4>Operation &amp; Maintenance</h4>
							<p>Claritas est etiam processus dynamic, qui sequitur mutationem consetudium lectorum.</p>
						</div><!-- end text -->
					</div><!-- end column -->

					<div class="col-service">
						<span class="small-icon">
							<i class="fa fa-fw fa-clipboard"></i>
						</span>
						<div class="small-icon-text">
							<h4>Project Control</h4>
							<p>Claritas est etiam processus dynamic, qui sequitur mutationem consetudium lectorum.</p>
						</div><!-- end text -->
					</div><!-- end column -->

				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end service-row -->
	  <section class="home-about">
			<div class="container">
				<div class="row">
					<div class="about-text">
						<h3 class="home-title">Who We Are</h3>
						<p class="trigger animated fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
						feugait nulla facilisi.</p>
						<p><a href="#" class="btn btn-default">Learn More</a></p>
					</div><!-- end column -->
					<div class="about-figure">
						<figure>
							<img src="images/content/about-img.png" alt="">
						</figure>
					</div><!-- end column -->
				</div><!-- end row -->
			</div>
		</section><!-- end about -->
	  <section class="portfolio">
			<div class="container">
				<div class="row no-gutter">

					<div id="filter">
						<ul id="options">
							<li><a data-filter="*" href="#" class="selected">All Projects</a></li>
							<li><a data-filter=".building" href="#">Building</a></li>
							<li><a data-filter=".interior" href="#">Interior Design</a></li>
							<li><a data-filter=".commercial" href="#">Commercial</a></li>
							<li><a data-filter=".residential" href="#">Residential</a></li>
						</ul>
					</div><!-- end #filter -->
					<div id="foliowrap">
						<figure class="foliobox building">
							<img src="images/content/folio-01.png" alt="">
							<figcaption>
								<span class="folcat">COMMERCIAL</span>
								<h3 class="foltitle">Nirmala Exclusive Villa</h3>
								<a href="#" class="goto">View Project</a>
							</figcaption>
						</figure><!-- end foliobox -->
						<figure class="foliobox building commercial">
							<img src="images/content/folio-02.png" alt="">
							<figcaption>
								<span class="folcat">BUILDING</span>
								<h3 class="foltitle">Nirmala Exclusive Villa</h3>
								<a href="#" class="goto">View Project</a>
							</figcaption>
						</figure><!-- end foliobox -->
						<figure class="foliobox commercial residential">
							<img src="images/content/folio-03.png" alt="">
							<figcaption>
								<span class="folcat">RESIDENTIAL</span>
								<h3 class="foltitle">Nirmala Exclusive Villa</h3>
								<a href="#" class="goto">View Project</a>
							</figcaption>
						</figure><!-- end foliobox -->

						<figure class="foliobox residential interior">
							<img src="images/content/folio-04.png" alt="">
							<figcaption>
								<span class="folcat">INTERIOR</span>
								<h3 class="foltitle">Nirmala Exclusive Villa</h3>
								<a href="#" class="goto">View Project</a>
							</figcaption>
						</figure><!-- end foliobox -->
						<figure class="foliobox building commercial residential">
							<img src="images/content/folio-05.png" alt="">
							<figcaption>
								<span class="folcat">RESIDENTIAL</span>
								<h3 class="foltitle">Nirmala Exclusive Villa</h3>
								<a href="#" class="goto">View Project</a>
							</figcaption>
						</figure><!-- end foliobox -->
						<figure class="foliobox interior commercial">
							<img src="images/content/folio-06.png" alt="">
							<figcaption>
								<span class="folcat">INTERIOR</span>
								<h3 class="foltitle">Nirmala Exclusive Villa</h3>
								<a href="#" class="goto">View Project</a>
							</figcaption>
						</figure><!-- end foliobox -->
					</div><!-- end #foliowrap -->

					<div class="contact-hero">
						<div class="pull-left">
							<p>Claritas est etiam processus dynamicus ?</p>
						</div>
						<div class="pull-right">
							<a href="#" class="btn btn-lg btn-default">Get a Quote</a>
						</div>
					</div><!-- end contact-hero -->

				</div><!-- end row -->
			</div>
		</section><!-- end portfolio -->

		<section class="bloghome">
			<div class="container">
				<div class="row">
					<h3 class="home-title">Latest News</h3>

					<div class="col-sm-4">
						<div class="inner">
							<figure class="w-thumb">
								<img src="images/content/post-01.png" alt="">
							</figure>
							<div class="entry-header">
								<time class="published" datetime="2014-12-13" title="December 13, 2014 - 21:12 pm">December 13, 2014</time>
								<h2 class="post-title entry-title">
									<a href="#">Claritas Est Etiam Processus Dynamicus</a>
								</h2>
							</div><!-- end entry-header -->
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhona euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p>
									<a href="#" class="more">Read More</a>
								</p>
							</div><!-- entry-content -->
						</div><!-- end inner -->
					</div><!-- end column -->

					<div class="col-sm-4">
						<div class="inner">
							<figure class="w-thumb">
								<img src="images/content/post-02.png" alt="">
							</figure>
							<div class="entry-header">
								<time class="published" datetime="2014-12-13" title="December 13, 2014 - 21:12 pm">December 13, 2014</time>
								<h2 class="post-title entry-title">
									<a href="#">Investigationes Demonstraverunt Lectores</a>
								</h2>
							</div><!-- end entry-header -->
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhona euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p>
									<a href="#" class="more">Read More</a>
								</p>
							</div><!-- entry-content -->
						</div><!-- end inner -->
					</div><!-- end column -->

					<div class="col-sm-4">
						<div class="inner">
							<figure class="w-thumb">
								<img src="images/content/post-03.png" alt="">
							</figure>
							<div class="entry-header">
								<time class="published" datetime="2014-12-13" title="December 13, 2014 - 21:12 pm">December 13, 2014</time>
								<h2 class="post-title entry-title">
									<a href="#">Consuetudium Lectorum Mirum Est Notare quam</a>
								</h2>
							</div><!-- end entry-header -->
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhona euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p>
									<a href="#" class="more">Read More</a>
								</p>
							</div><!-- entry-content -->
						</div><!-- end inner -->
					</div><!-- end column -->

				</div><!-- end row -->
			</div>
		</section><!-- end blog -->

		<div class="testimonial">
			<div class="container">
				<div class="row">
					<div id="testimonial-home" class="carousel slide">
						<ol class="carousel-indicators">
	                        <li data-target="#testimonial-home" data-slide-to="0" class="active"></li>
	                        <li data-target="#testimonial-home" data-slide-to="1" class=""></li>
	                        <li data-target="#testimonial-home" data-slide-to="2" class=""></li>
	                    </ol>

	                    <div class="carousel-inner">

	                    	<div class="item active">
	                    		<figure class="ava">
	                    			<img src="images/content/ava-01.png" alt="">
	                    		</figure>
	                    		<div class="context">
	                    			<div class="inner">
		                    			<blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta </blockquote>
		                    			<p class="who">Reza Kurniawan, Co-Founder &amp; CEO</p>
	                    			</div>
	                    		</div>
	                    	</div><!-- end item -->

	                    	<div class="item">
	                    		<figure class="ava">
	                    			<img src="images/content/ava-02.png" alt="">
	                    		</figure>
	                    		<div class="context">
	                    			<div class="inner">
		                    			<blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta </blockquote>
		                    			<p class="who">Kuncoro Bhakti, Engineer</p>
		                    		</div>
	                    		</div>
	                    	</div><!-- end item -->

	                    	<div class="item">
	                    		<figure class="ava">
	                    			<img src="images/content/ava-03.png" alt="">
	                    		</figure>
	                    		<div class="context">
	                    			<div class="inner">
		                    			<blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta </blockquote>
		                    			<p class="who">Alex Wagiman, Contractor</p>
		                    		</div>
	                    		</div>
	                    	</div><!-- end item -->

	                    </div><!-- end carousel-inner -->

	                    <a class="left carousel-control" href="#testimonial-home" role="button" data-slide="prev">
							<span class="fa fa-fw fa-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#testimonial-home" role="button" data-slide="next">
						    <span class="fa fa-fw fa-chevron-right"></span>
						</a>

					</div><!-- end carousel -->
				</div><!-- end row -->
			</div>
		</div><!-- end testimonial -->

		<section class="partner">
			<div class="container">
				<div class="row">
					<h3 class="home-title">Our Partner</h3>
					<div class="inner">
						<div class="col-partner">
							<div>
								<img src="images/content/partner-01.png" alt="">
							</div>
						</div><!-- end column -->

						<div class="col-partner">
							<div>
								<img src="images/content/partner-02.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-03.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-04.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-05.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-06.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-07.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-08.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-09.png" alt="">
							</div>
						</div><!-- end column -->
						<div class="col-partner">
							<div>
								<img src="images/content/partner-10.png" alt="">
							</div>
						</div><!-- end column -->
					</div><!-- end inner -->
				</div>
			</div>
		</section><!-- end partner -->

		<footer id="footer-section" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
								<h3 class="widget-title">About Us</h3>
								<p>
									<img src="images/content/logo-light.png" alt="">
								</p>
								<p>Lusioto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
								<p><a href="#" class="more">Learn More</a></p>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>

					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
								<h3 class="widget-title">Office Address</h3>
								<p>Our Office Address :</p>
								<table>
									<tr>
										<td><strong>Location</strong></td>
										<td> : Kaliurang St. No 104, Sinduharjo, <br/>&nbsp;&nbsp;Ngaglik, Sleman.</td>
									</tr>
									<tr>
										<td><strong>Telp</strong></td>
										<td> : (0274) 9982732</td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td> : <a href="mailto:staff@localhost.net">staff@localhost.net</a></td>
									</tr>
									<tr>
										<td><strong>Open Hour</strong></td>
										<td> : Monday &dash; Friday <br/> &nbsp;&nbsp;08:00 AM &dash; 16:00 PM</td>
									</tr>
								</table>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>

					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
								<h3 class="widget-title">Photos On Flickr</h3>
								<ul class="list-galleries">
									<li>
										<a href="#"><img src="images/content/gal-01.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-02.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-03.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-04.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-05.png" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="images/content/gal-06.png" alt=""></a>
									</li>
								</ul>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>
				</div>
			</div>
		</footer>

		<div class="footer-credit">
			<ul class="list-socmed">
				<li>
					<a href="#"><i class="fa fa-fw fa-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-twitter"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-linkedin"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-instagram"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-youtube"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-pinterest"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-google-plus"></i></a>
				</li>
			</ul>
			<p class="copy">COPYRIGHT &copy; 2104 BATAKOO. WEB DESIGN BY <a href="http://mattsapii.co/">MATTSAPII</a></p>
		</div><!-- end footer-credit -->
    	
    </div><!-- end #page hfeed site -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>