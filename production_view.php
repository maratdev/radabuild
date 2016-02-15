<?
include ("block/bd.php"); /*Соединяемся с базой*/
if (isset($_GET['id'])) {$id = $_GET['id'];}
$result = mysql_query("SELECT * FROM page WHERE id='$id'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
	  <!--Created by DonKing
         Base template (without user's data) checked by http://s-dt.ru-->
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	  <meta name="author" lang="ru" content="s-dt.ru"/>
	  <meta name="copyright" content="&copy; DTStudio <?php echo date("Y"); ?> "/>
	  <meta name="keywords" content="<?php echo $myrow['meta_k']; ?>"/>
	  <meta name="robots" content="all"/>
	  <meta name="description" content="<?php echo $myrow['meta_d']; ?>">
	  <title><?php echo $myrow['title']; ?></title>
	  <meta name='yandex-verification' content='' />
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
    				<h2 class="page-title"><?php echo $myrow['categories']; ?></h2>
    				<p class="title-desc"><?php echo $myrow['meta_d']; ?></p>
    			</div><!-- end row -->
    		</div><!-- end container -->
    	</div><!-- end head-title -->

		<div id="main">
			<div class="container">
				<div class="row">
					<aside id="secondary" class="col-md-4">
						<div class="sidebar">

							<div id="search-2" class="widget widget_search">
								<h3 class="widget-title">Поиск</h3>
								<div class="searchform">
									<form>
										<input type="text" class="txt" name="s" placeholder="Введите название">
										<input type="submit" value="поиск" class="btn btn-sm">
									</form>
								</div><!-- end searchform -->
							</div><!-- end search widget -->

							<div class="widget post-type-widget">
								<h3 class="widget-title">Все услуги</h3>
								<ul>
									<?
									$result = mysql_query ("SELECT categories, id, title FROM page",$db);
									$myrow = mysql_fetch_array ($result);
									do {
										printf ("
									<li><span class='post-category'><a href='#'>%s</a></span>
										<h2 class='post-title'><a href='production_view.php?id=%s'>%s </a></h2>
									</li>",$myrow["categories"],$myrow["id"],$myrow["title"]);
									}
									while ($myrow = mysql_fetch_array ($result));
									?>
								</ul>
							</div><!-- end widget -->
						</div><!-- end sidebar -->
					</aside><!-- end secondary -->
					<div class="content-area col-md-8" id="primary">
						<div class="site-content" id="content">
							<article class="post hentry">
								<header class="entry-header">
									<div class="entry-media">
										<?php
										$result = mysql_query("SELECT * FROM page WHERE id='$id'",$db);
										$myrow = mysql_fetch_array($result);
										echo $myrow['img']; ?>
									</div><!-- end entry-media -->

									<h1 class="entry-title">
										<a href="#"><?php
											$result = mysql_query("SELECT * FROM page WHERE id='$id'",$db);
											$myrow = mysql_fetch_array($result);
											echo $myrow['title']; ?></a>
									</h1>

								</header><!-- end entry-header -->
								<div class="entry-content">
									<p> <?php
										$result = mysql_query("SELECT * FROM page WHERE id='$id'",$db);
										$myrow = mysql_fetch_array($result);
										echo $myrow['text']; ?></p>
								</div>
<!--								<div class="panel panel-default">-->
<!--									<div class="panel-heading" role="tab" id="headingOne">-->
<!--										<h4 class="panel-title">-->
<!--											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<!--												How duis autem in hendrerit in velit molestie consequat ?-->
<!--												<i class="fa fa-fw fa-arrow-circle-down"></i>-->
<!--											</a>-->
<!--										</h4>-->
<!--									</div>-->
<!--									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">-->
<!--										<div class="panel-body">-->
<!--											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.-->
<!--										</div><!-- end panel-body-->
<!--									</div><!-- end .panel collapse -->
<!--								</div><!-- end panel-->

</article><!-- end hentry -->
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
    <script src="js/spoiler.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>