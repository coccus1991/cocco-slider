<?php

/*
  Plugin Name: cocco slider
  Description: Slider di prova per Dplace.
  Author: dado
  Version: 1.0
 */




require_once(dirname(__FILE__) . '/setup_database.php');
require_once(dirname(__FILE__) . '/backend/backend.php');
require_once(dirname(__FILE__) . '/frontend/frontend.php');
require_once(dirname(__FILE__) . '/server.php');


add_action( 'admin_enqueue_scripts', 'my_load_wp_media_files' );
register_activation_hook(__FILE__, "attivazione");
register_deactivation_hook(__FILE__, "disattivazione");
add_action( 'admin_menu', 'coccoslider_menu' );
add_action( 'init', 'registra_cocco_slider');
add_action( 'wp_ajax_persisti_coccoslider', 'persisti_coccoSlider' );

function coccoslider_menu(  ) { 

  add_menu_page( 'cocco slider', 'cocco slider', 'manage_options', 'cocco_slider', 'custom_options_coccoslider' );
}

function remove_footer_admin () 
{
    echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// $wpdb->query('TRUNCATE TABLE wp_coccoslider');
// $wpdb->insert( 
//   "wp_coccoslider", 
//   array( 
//     'titolo' => "test titolo2", 
//     'titolomenu' => "test titolo menu2", 
//     'link' => "test link2", 
//   ) 
// );


?>