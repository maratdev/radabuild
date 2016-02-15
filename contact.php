<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Batakoo - Reconstraction Web Template</title>

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

    	<div class="head-title">
    		<div class="container">
    			<div class="row">
    				<h2 class="page-title">НАШИ КОНТАКТЫ</h2>
    				<p class="title-desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
    			</div><!-- end row -->
    		</div><!-- end container -->
    	</div><!-- end head-title -->

		<div id="main">
			<div class="container">
				<div class="row">
					<div class="content-area col-md-12" id="primary">
						<div class="site-content" id="content">

							<article class="post hentry">

								<header class="entry-header">

									<div class="entry-map">

										<div class="map">
											<iframe width="750" height="450" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=riva+grill++bar+terrace&amp;aq=&amp;sll=-17.978733,82.96875&amp;sspn=89.427711,158.027344&amp;ie=UTF8&amp;hq=riva+grill++bar+terrace&amp;hnear=&amp;t=m&amp;cid=2822615778175692252&amp;ll=-6.22274,106.838726&amp;spn=0.0048,0.01031&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe>
										</div><!-- end map -->
										
									</div><!-- end entry-media -->

									<h1 class="entry-title">
										<a href="#">Typi Non Habent Claritatem Insitam Est Usus Legentis in Qui Facit Eorum Claritatem</a>
									</h1>

								</header><!-- end entry-header -->

								<div class="entry-content">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
									</p>

									<p>&nbsp;</p>

									<div class="row">
										<div class="col-md-6">
											<p>
												<strong>АДРЕС ОФИСА I :</strong><br/>
												Расположение : Республика Дагестан	:   г. Махачкала, ул. Гамидова 18ж 7 этаж<br/>Телефон : 8 (961) 323 39 48<br/>Email : <a href="inforada@inbox.ru">inforada@inbox.ru</a>
											</p>
										</div>
										<div class="col-md-6">
											<p>
												<strong>АДРЕС ОФИСА II :</strong><br/>
												Расположение : Республика Дагестан	:   г. Махачкала, ул. Гамидова 18ж 7 этаж<br/>Телефон : 8 (961) 323 39 48<br/>Email : <a href="inforada@inbox.ru">inforada@inbox.ru</a>
											</p>
										</div>
									</div><!-- end row -->
								</div><!-- end entry-content -->

							</article><!-- end hentry -->

							<div class="comment-outer">
								<div id="respond" class="comment-respond">
									<h2 id="reply-title" class="comment-reply-title">Напише сообщение</h2>
									<form class="comment-form">
										<p class="comment-notes">Ваш электронный адрес не будет опубликован. Все поля обязательны к заполнению.</p>
										<p class="comment-form-email">
											<label for="author">Ваше имя</label>
											<span class="required">*</span>
											<input id="author" type="text" class="input-text" name="author">
										</p>
										<p class="comment-form-author">
											<label for="email">Ваш Email</label>
											<span class="required">*</span>
											<input id="email" type="text" class="input-text" name="author">
										</p>
										<p class="comment-form-url">
											<label for="subject">Тема сообщения</label>
											<span class="required">*</span>
											<input id="subject" type="text" class="input-text" name="author">
										</p>
										<p class="comment-form-comment">
											<label for="message">Ваше сообщение</label>
											<textarea name="message" id="message" cols="45" rows="10" class="input-text"></textarea>
										</p>
										<p class="form-submit">
											<input class="btn btn-md btn-default" name="submit" type="submit" id="button" value="Отправить">
										</p>
									</form><!-- end #comment-form -->
								</div><!-- end comment-respond -->
							</div><!-- end comment-outer -->


						</div><!-- end site-content -->
					</div><!-- end content-area -->


				</div><!-- end row -->
			</div>
		</div><!-- end main -->



		<?php include_once("block/footer.php"); ?>
    	
    </div><!-- end #page hfeed site -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>