<?
include ("block/bd.php"); /*Соединяемся с базой*/

?>
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
    				<h2 class="page-title">Категории</h2>
    				<p class="title-desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
    			</div><!-- end row -->
    		</div><!-- end container -->
    	</div><!-- end head-title -->

		<div id="main">
			<div class="container">
				<div class="row">
					<div class="content-area" id="primary">
						<div class="col-md-3">
							<div class="basic pricing">
								<header class="pricing-header">
									<h3><strong>Опалубка</strong></h3>

									<img src="images/categories/1.jpg" alt="">
								</header>
								<div class="pricing-body">
									<ul>
										<li><a href="#">Опалубка для монолитного строительства </a></li>
										<li><a href="#">Комплектующие опалубки  </a></li>
										<li><a href="#">Опалубка стен  </a></li>
										<li><a href="#">Опалубка колонн стальная  </a></li>
									</ul>
								</div>
							</div><!-- end basic -->
						</div><!-- end col -->
					<div class="content-area" id="primary">
							<div class="col-md-3">
								<div class="basic pricing">
									<header class="pricing-header">
										<h3><strong>Леса строительные</strong></h3>

										<img src="images/categories/2.jpg" alt="">
									</header>
									<div class="pricing-body">
										<ul>
											<li><a href="#">Строительные леса рамные  </a></li>
											<li><a href="#">Строительные вышки  </a></li>
											<li><a href="#">Вышка-тура  </a></li>
										</ul>
									</div>
								</div><!-- end basic -->
							</div><!-- end col -->
							<div class="content-area" id="primary">
								<div class="col-md-3">
									<div class="basic pricing">
										<header class="pricing-header">
											<h3>Опалубка</h3>

											<img src="images/categories/3.jpg" alt="">
										</header>
										<div class="pricing-body">
											<ul>
												<li><a href="#">Опалубка для монолитного строительства </a></li>
												<li><a href="#">Строительные вышки  </a></li>
												<li><a href="#">Вышка-тура  </a></li>
											</ul>
										</div>
									</div><!-- end basic -->
								</div><!-- end col -->
								<div class="content-area" id="primary">
									<div class="col-md-3">
										<div class="basic pricing">
											<header class="pricing-header">
												<h3>Опалубка</h3>

												<img src="images/categories/1.jpg" alt="">
											</header>
											<div class="pricing-body">
												<ul>
													<li><a href="#">Опалубка для монолитного строительства </a></li>
													<li><a href="#">Геотекстиль иглопробивной  </a></li>
													<li><a href="#">Геомембрана ПВД (полиэтилен высокого давления)  </a></li>
													<li><a href="#">Установки алмазного бурения  </a></li>
												</ul>
											</div>
										</div><!-- end basic -->
									</div><!-- end col -->
						<div class="contact-hero">
							<div class="pull-right">
								<?
								$result2 = mysql_query("SELECT * FROM categoriya",$db);
								if (!$result2)
								{
									echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ruseller.com. <br> <strong>Код ошибки:</strong></p>";
									exit(mysql_error());
								}

								if (mysql_num_rows($result2) > 0)
								{
									$myrow2 = mysql_fetch_array($result2);
									do
									{
										printf ("<li>
                <h2 class='post-title'><a href='view_cat.php?id=27'>%s </a></h2>
                </li>",$myrow2["title"]);
									}
									while ($myrow2 = mysql_fetch_array($result2));
								}

								else
								{
									echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
									exit();
								}
								?>
							</div>
						</div><!-- end contact-hero -->
					</div><!-- end content-area -->
				</div><!-- end row -->
			</div>
		</div><!-- end portfolio -->
	</div>
				<?php include_once("block/footer.php"); ?>
    	
    			</div><!-- end #page hfeed site -->
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>