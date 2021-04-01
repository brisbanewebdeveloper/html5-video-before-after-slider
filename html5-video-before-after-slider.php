<?php
/*
Plugin Name: HTML5 Video Before After Slider
Plugin URI: https://github.com/hironozu/html5-video-before-after-slider
Description: Show Video with Before After Slider.
Author: Brisbane Web Developer
Text Domain: html5-video-before-after-slider.php
Domain Path: /languages/
Version: 1.0.0
*/

function h5vbas_shortcode($atts) {

  wp_enqueue_style('h5vbas', plugins_url() . '/html5-video-before-after-slider/css/default.css');
  wp_enqueue_script('h5vbas', plugins_url() . '/html5-video-before-after-slider/js/default.js', array('jquery'), null, true);

  $template_path = 'h5vbas/';
  $default_path = plugin_dir_path(__FILE__) . 'templates/';
  $template_name = 'default.php';

  // Enable to let Theme generate its own HTML structure
  $template = locate_template(array(
    $template_path . $template_name,
	));
  if ( ! $template ) {
		$template = $default_path . $template_name;
  }

  $output = '';
  if (file_exists($template)) {
    ob_start();
    include $template;
    $output = ob_get_contents();
    ob_end_clean();
  }

  return $output;
}
add_shortcode('h5vbas', 'h5vbas_shortcode');
