<?
$url = $_SERVER['REQUEST_URI'];
if($url == "/portfolio-single.php")
{$url1 = "active";}
elseif($url == "/portfolio.php")
{$url2 = "active";}
elseif($url == "/services.php")
{$url3 = "active";}
elseif($url == "/contact.php")
{$url4 = "active";}
else
{$index = "active";}
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
            <li class="<?=$index?>" ><a href="/index.php">Главная</a></li>
            <li class="<?=$url1?>" ><a href="/portfolio-single.php">О нас</a></li>
            <li class="<?=$url2?>" ><a href="/portfolio.php">Портфолио</a></li>
            <li class="<?=$url3?>" ><a href="/services.php">Услуги</a></li>
            <li class="<?=$url4?>" ><a href="/contact.php">Контакты</a></li>
        </ul>
    </div><!-- end nav-menu -->
</nav><!-- primary-navigation -->