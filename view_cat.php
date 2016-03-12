<?
include ("block/bd.php"); /*Соединяемся с базой*/
if(isset($_GET['cat'])) {$cat = $_GET['cat'];}
if(!isset($cat)) {$cat=1;}


$result = mysql_query("SELECT * FROM `categoriya` WHERE id='$cat'",$db);
if (!$result)
{
    echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ruseller.com. <br> <strong>Код ошибки:</strong></p>";
    exit(mysql_error());
}
if (mysql_num_rows($result) > 0)
{
    $myrow = mysql_fetch_array($result);
}
else
{
    echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!--Created by DonKing
       Base template (without user's data) checked by http://s-dt.ru-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <h2 class="page-title">Опалубка для монолитного строительства</h2>
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
                            <h3 class="widget-title">Все категории</h3>
                            <ul>
                                <?
                                include ("block/left.php"); /*Соединяемся с базой*/
                                ?>

                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </aside><!-- end secondary -->
                <div class="content-area col-md-8" id="primary">
                    <div class="site-content" id="content">
                        <article class="post hentry">
                            <header class="entry-header">


                            </header><!-- end entry-header -->
                            <div class="entry-content">
                                <p> <?php
                                    $result = mysql_query("SELECT id, title FROM page WHERE cat='$cat'",$db);
                                    if (!$result)
                                    {
                                        echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ruseller.com. <br> <strong>Код ошибки:</strong></p>";
                                        exit(mysql_error());
                                    }

                                    if (mysql_num_rows($result) > 0) {
                                        $myrow = mysql_fetch_array($result);

                                        do {

                                            printf("<table align='center' class='post'>
        <tr>
         <td class='post_title'>
		 <p class='post_name'><a href='production_view.php?id=%s'>%s</a></p></tr>

</table>", $myrow["id"], $myrow["title"]);


                                        } while ($myrow = mysql_fetch_array($result));
                                    }
                                    ?>
                                </p>
                            </div>
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