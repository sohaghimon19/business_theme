<?php
//custom logo function
function business_theme_custom_logo_setup()
{
  $defaults = array(
    'height'      => 150,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-description')
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'business_theme_custom_logo_setup');