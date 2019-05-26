<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name');?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url');?>/css/font-awesome.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<style>
  .jumbotron{
    background-image: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url') . '/img/search-background.jpg' );?>);
  }
  .content-region-3{
    background-image: url(<?php echo get_theme_mod('footer_image', get_bloginfo('template_url') . '/img/footer-image.jpg' );?>);
  }
</style>
<body <?php body_class();?>>


  <div class="header clearfix">
    <div class="container">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'depth'          =>  2,
          'container'      =>  false,
          'menu_class'     => 'nav nav-pills pull-right',
          'fallback'       => 'wp_bootststrap_navwalker::fallback ',
          'walker'         => new wp_bootstrap_navwalker(),
        ));
      ?>
          <div class="custom-logo">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                                  the_custom_logo();
            }?>
          </div>
    </div>
    <!-- .container -->
  </div>
  <!-- .header -->