<?php 
  $menu = wp_get_nav_menu_items('header');
  $current_language = pll_current_language();
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css"/>
  <link rel="stylesheet" href="https://use.typekit.net/rkk3ubk.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" />
  <title>Ascension 2024</title>
</head>
<body id="root">
  <div class="mobileMenu">
    <div class="nav">
      <ul>
        <?php
          wp_nav_menu(array(
              'menu' => 'header-' . $current_language,
              'container' => false,
              'menu_class' => 'header-' . $current_language
          ));
        ?>
      </ul>
    </div>
    <ul class="socials">
        <li class="twitter">
          <a href="https://x.com/Ascension_tn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitter.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.twitch.tv/zerator" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitch.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/ascension_tn/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/insta.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@ascensiontn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tiktok.svg" alt="">
          </a>
        </li>
      </ul>
  </div>
  <div class="shape-header-container"></div>
  <div class="header-navigation-container">
    <div class="header-navigation">
      <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo"></a>
      <div class="burgerMenu">
        <div id="nav-icon3">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <?php
        wp_nav_menu(array(
            'menu' => 'header-' . $current_language,
            'container' => false,
            'menu_class' => 'header-menu-list-container'
        ));
      ?>
    </div>
    <div class="header-submenu">
      <ul class="socials">
        <li class="twitter">
          <a href="https://x.com/Ascension_tn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitter.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.twitch.tv/zerator" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitch.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/ascension_tn/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/insta.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@ascensiontn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tiktok.svg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
