<?php
   /*
   Plugin Name: Simple Starter Accordion
   Plugin URI: http://craigwfox.com
   Description: Just a simple jquery accordion.
   Version: 1.0
   Author: Craig Fox
   Author URI: http://craigwfox.com
   License: GPL2
   */

  function ssta_admin_page() {
    include('ssta_admin.php');
  }
  add_action('admin_menu', 'ssta_admin_page_actions');
  function ssta_admin_page_actions() {
    add_options_page('Simple Starter Accordion Admin', 'Simple Starter Accordion', 'manage_options', 'sst_accordion.php', 'ssta_admin_page');
  }

  function ssta_styles() {
    wp_enqueue_style( 'ssta-styles', plugins_url( '/assets/css/ssta.min.css', __FILE__ ) );
    wp_enqueue_script( 'ssta-scripts', plugins_url( '/assets/js/ssta.min.js', __FILE__ ), array( 'jquery' ), '1.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'ssta_styles' );


  function ssta_wrap_shortcode($atts, $content = null) {
    extract(shortcode_atts( array(
      'class_name' => '',
    ), $atts));
    return '<div class="ssta-wrap '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
  add_shortcode('accordion_wrap', 'ssta_wrap_shortcode');

  function ssta_section_shortcode($atts, $content = null) {
    extract(shortcode_atts( array(
      'class_name' => '',
    ), $atts));
    return '<div class="ssta-section '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
  add_shortcode('accordion_section', 'ssta_section_shortcode');

  function ssta_title_shortcode($atts, $content = null) {
    extract(shortcode_atts( array(
      'class_name' => '',
    ), $atts));
    return '<div class="ssta-title '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
  add_shortcode('accordion_title', 'ssta_title_shortcode');

  function ssta_content_shortcode($atts, $content = null) {
    extract(shortcode_atts( array(
      'class_name' => '',
    ), $atts));
    return '<div class="ssta-content '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
  add_shortcode('accordion_content', 'ssta_content_shortcode');

?>