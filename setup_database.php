<?php
  
  function my_load_wp_media_files() {
  wp_enqueue_media();
}


function attivazione() {
   
    global $wpdb;

    $table_name = $wpdb->prefix . 'coccoslider';

    $sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      titolomenu varchar(255) DEFAULT NULL,
      ordina varchar(255) DEFAULT NULL,
      titolo varchar(255) DEFAULT NULL,
      titolobottone varchar(255) DEFAULT NULL,
      link varchar(255) DEFAULT NULL,
      linkimg varchar(255) DEFAULT NULL,
      descrizione TEXT DEFAULT NULL,
      UNIQUE KEY id (id)
    );";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

$dati = array(
                   0 => array(
                    "titolomenu" => "Pagina2",
                    "titolo" => "titolo2", 
                    "linkimg" => plugins_url('/img/1.jpg', __file__), 
                    "ordina" => 1, 
                    "titolobottone" => "clicca", 
                    "link" => "http://www.google.it", 
                    "descrizione" => "descrizione2"
                    ), 
                   1 => array(
                    "titolomenu" => "Pagina1", 
                    "titolo" => "titolo1", 
                    "linkimg" => plugins_url('/img/2.jpg', __file__),
                    "ordina" => 0, 
                    "titolobottone" => "clicca", 
                    "link" => "http://www.google.it", 
                    "descrizione" => "descrizione1"
                    ), 
                   2 => array(
                    "titolomenu" => "Pagina3", 
                    "titolo" => "titolo3", 
                    "linkimg" => plugins_url('/img/3.jpg', __file__), 
                    "ordina" => 2, 
                    "titolobottone" => "clicca", 
                    "link" => "http://www.google.it",
                    "descrizione" => "descrizione3"
                    )
                   );
       
  foreach ($dati as $key => $dato) {
          $valori=array(
          'titolomenu'=> $dato["titolomenu"], 
          'titolo' => $dato["titolo"], 
          'linkimg' => $dato["linkimg"], 
          'ordina' => $dato["ordina"], 
          'titolobottone' => $dato["titolobottone"],
          'link'=> $dato["link"],
          'descrizione' => $dato["descrizione"]
          );    
        $wpdb->insert($table_name,$valori); 
        } 
}
function disattivazione() {
   
   global $wpdb;
        $table = $wpdb->prefix."coccoslider";

  $wpdb->query("DROP TABLE IF EXISTS $table"); 

}

