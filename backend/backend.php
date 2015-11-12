<?php

function custom_options_coccoslider() { 
 global $wpdb;
      $dati = $wpdb->get_results( "SELECT * FROM wp_coccoslider",ARRAY_A);

    function sortByordina($a, $b) {
    return $a['ordina'] - $b['ordina'];
}
usort($dati, 'sortByordina');
require_once(dirname(__FILE__) . '/template.php');

}