<!DOCTYPE HTML>
<!--
    Dopetrope by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
        <?php wp_head(); ?>
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
        <header id="header" role="header" class="header bg--white">
          <div class="logo">
              <a href="#">
                 <img src="<?php bloginfo('template_directory') ?>/img/logo-nuevasemana.png" width="200" height="60"/>
            </a>
            <div id="menu" class="toggle-menu icon-icon-menu"></div>
          </div>
          <nav id="navigation" role="navigation" class="main-nav">
            <div id="target" class="main-nav__cont">
              <ul class="main-nav__list non-margin">
                <li class="main-nav__item list-none text--p2">
                       <a href="#" class="main-nav__link">Blog  </a>
                       <a href="#" class="main-nav__link">Ediciones</a>
                       <a href="#" class="main-nav__link">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
