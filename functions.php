<?php
// добавление расширенных возможностей
if ( ! function_exists('lesser_theme_setup')):
   function lesser_theme_setup() {
      // добавление тега title
      add_theme_support( 'title-tag' );

      // Adding thumbnails
      add_theme_support( 'post-thumbnails', array( 'post', 'lesson' ) );

      // добавление пользовательского логотипа
      add_theme_support( 'custom-logo', [
         'height'      => 30,
         'width'       => 30,
         'flex-width'  => false,
         'flex-height' => false,
         'header-text' => 'LESSER',
         'unlink-homepage-logo' => true, // WP 5.5
      ] );

      // регистрация меню
      register_nav_menus( [
         'header_menu' => 'Меню в шапке',
         'footer_menu' => 'Меню в подвале'
      ] );
      
   }
endif;
add_action( 'after_setup_theme', 'lesser_theme_setup' );

// Подключение стилей и скриптов
function enqueue_lesser_style() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_style( 'lesser-theme', get_template_directory_uri() . '/assets/css/lesser-theme.css', 'style');
}
add_action( 'wp_enqueue_scripts', 'enqueue_lesser_style' );