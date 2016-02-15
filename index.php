<!DOCTYPE html>
<html lang="ru">
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
		      		<img src="images/content/slider-01.jpg" alt="">
		      		<div class="carousel-caption">
		      			<h3>Профессиональная команда</h3>
		      			<a href="#" class="btn btn-sm btn-default">ПОСМОТРЕТЬ ПОРТФОЛИО <i class="fa fa-fw fa-long-arrow-right"></i></a>
		      		</div>
		    	</div>

			    <div class="item">
			      	<img src="images/content/slider-02.png" alt="">
			      	<div class="carousel-caption">
			      		<h3>Эксплуатация и техническое обслуживание</h3>
			      		<a href="#" class="btn btn-sm btn-default">ПОДРОБНЕЕ <i class="fa fa-fw fa-long-arrow-right"></i></a>
			      	</div>
			    </div>
			    <div class="item">
			      	<img src="images/content/slider-03.png" alt="">
			      	<div class="carousel-caption">
			      		<h3>Управление проектами</h3>
			      		<a href="#" class="btn btn-sm btn-default">ПОДРОБНЕЕ <i class="fa fa-fw fa-long-arrow-right"></i></a>
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
							<h4>Профессиональная команда</h4>
							<p>Claritas est etiam processus dynamic, qui sequitur mutationem consetudium lectorum.</p>
						</div><!-- end text -->
					</div><!-- end column -->

					<div class="col-service">
						<span class="small-icon">
							<i class="fa fa-fw fa-gears"></i>
						</span>
						<div class="small-icon-text">
							<h4>Эксплуатация и техническое обслуживание</h4>
							<p>Claritas est etiam processus dynamic, qui sequitur mutationem consetudium lectorum.</p>
						</div><!-- end text -->
					</div><!-- end column -->

					<div class="col-service">
						<span class="small-icon">
							<i class="fa fa-fw fa-clipboard"></i>
						</span>
						<div class="small-icon-text">
							<h4>Управление проектами</h4>
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
						<h3 class="home-title">Кто мы?</h3>
						<p class="trigger animated fadeInUp"> Компания «RADA Build» занимается комплектацией строительных объектов.
							На сегодняшний день мы имеем:
							Отличную репутацию
							Большой ассортимент товаров
							Широкий круг надежных поставщиков
							Конкурентоспособные цены и высокое качество товаров и услуг
							Возможность работать оперативно, экономя время и трудозатраты
							Мы обеспечиваем комплексное  снабжение строительных объектов  «на удалении».
								</p>
						<p><a href="#" class="btn btn-default">Подробнее</a></p>
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
							<li><a data-filter="*" href="#" class="selected">Все проекты</a></li>
							<li><a data-filter=".building" href="#">Строительство</a></li>
							<li><a data-filter=".interior" href="#">Дизайн</a></li>
							<li><a data-filter=".commercial" href="#">Коммерческие проекты</a></li>
							<li><a data-filter=".residential" href="#">Резиденции</a></li>
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
							<p>Понравились проекты ?</p>
						</div>
						<div class="pull-right">
							<a href="#" class="btn btn-lg btn-default">Связаться</a>
						</div>
					</div><!-- end contact-hero -->

				</div><!-- end row -->
			</div>
		</section><!-- end portfolio -->

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
					<h3 class="home-title">Наши партнеры</h3>
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
	  <?php include_once("block/footer.php"); ?>

    	
    </div><!-- end #page hfeed site -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugin.js"></script>
  </body>
</html>