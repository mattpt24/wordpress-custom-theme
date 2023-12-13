<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!-- GRABS THINGS LIKE CSS & CDN's FROM FUNCTIONS.PHP -->
    <?php wp_head();?>
    <!--  -->
    
</head>
<body <?php body_class();?>>




<header class="site-header">
    <nav class="navbar__container">

        <!-- BRAND LOGO -->
        <a class="nav__logo" href="<?php echo site_url()?>"><img src="<?php echo get_theme_file_uri('images/logo-ipsum.png')?>" alt=""></a>


        <!-- NAV LINKS -->
        <ul class="nav__list">
            <li><a class="nav__link" href="<?php echo site_url('/page-one')?>">Page 1</a></li>
            <li><a class="nav__link" href="<?php echo site_url('/page-two')?>">Page 2</a></li>
            <li><a class="nav__link" href="<?php echo site_url('/page-three')?>">Page 3</a></li>
            <li><a class="nav__link" href="<?php echo site_url('/page-four')?>">Page 4</a></li>
            <li><a class="nav__link" href="<?php echo site_url('/page-five')?>">Page 5</a></li>
        </ul>


        <!-- BUTTON -->
        <div class="nav__btn__container">
            <a class="btn btn--dark" href="<?php echo site_url('/contact')?>">Replace text with ACF</a>
        </div>


    </nav> 
</header>

