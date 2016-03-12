<?
$url = $_SERVER['REQUEST_URI'];

if($url == "/index.php")
{$url0 = "active";}
elseif($url == "/portfolio-single.php")
{$url1 = "active";}
elseif($url == "/portfolio.php")
{$url2 = "active";}
elseif($url == "/pricing-table.php")
{$url3 = "active";}
elseif($url == "/view_cat.php")
{$url4 = "active";}
elseif($url == "/production_view.php")
{$url4 = "active";}
elseif($url == "/contact.php")
{$url5 = "active";}

?>


<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
    <span class="sr-only">Меню</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<div class="logo navbar-brand">
    <a href="#">
        <img src="images/header-logo.png" alt="">
    </a>
</div><!-- end logo -->

<nav id="primary-navigation" class="site-navigation navbar-collapse collapse" role="navigation">
    <div class="nav-menu">
        <ul class="menu">
            <li class="<?=$url0?>" ><a href="/index.php">Главная</a></li>
            <li class="<?=$url1?>" ><a href="/portfolio-single.php">О нас</a></li>
            <li class="<?=$url2?>" ><a href="/portfolio.php">Портфолио</a></li>
<!--            <li class="--><?//=$url3?><!--" ><a href="/pricing-table.php">Услуги</a></li>-->
            <li class="<?=$url4?>" ><a href="/view_cat.php">Продукция</a></li>
            <li class="<?=$url5?>" ><a href="/contact.php">Контакты</a></li>
        </ul>
    </div><!-- end nav-menu -->
</nav><!-- primary-navigation -->
<div class="header-feature">
    <a href="contact.html" class="btn btn-lg btn-default">8 (961) 323 39 48</a>
</div><!-- end header-feature -->