<?php

  function slurp_styles() {
    wp_enqueue_style('slurp_stylesheet', get_stylesheet_uri());
  }

add_action('wp_enqueue_scripts', 'slurp_styles');

  function theme_scripts() {
    wp_enqueue_script( 'menu-js', '/wp-content/themes/slurp-theme/js/menu.js', false );
}

function register_theme_menus() {
  register_nav_menu('sidebar-nav',__( 'Sidebar Nav' ));
}
add_action( 'init', 'register_theme_menus' );

  add_action( 'wp_enqueue_scripts', 'theme_scripts' );
  add_theme_support( 'post-thumbnails' );

 ?>

 <?php
 add_action('wp_head', 'wpb_add_googleanalytics');
 function wpb_add_googleanalytics() { ?>

   <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110803193-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110803193-2');
  </script>


 <?php } ?>
