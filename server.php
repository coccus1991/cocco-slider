<?php

function persisti_coccoSlider() {
 
    // The $_REQUEST contains all the data sent via ajax
if ( isset($_REQUEST) ) {
     
     global $wpdb; 
   
   $backup = $wpdb->get_results( "SELECT * FROM wp_coccoslider",ARRAY_A);       
$wpdb->query('TRUNCATE TABLE wp_coccoslider');
        $dati = $_REQUEST['dati'];

     foreach ($dati as $key => $dato) {

         extract($dato);
         
          $valori=array(
          'titolomenu'=> $titolomenu, 
          'titolo' => $titolo, 
          'linkimg' => $linkimg, 
          'ordina' => $ordina, 
          'titolobottone' => $titolobottone,
          'link'=> $link,
          'descrizione' => $descrizione
          );    
        
        $check=$wpdb->insert("wp_coccoslider",$valori);
        
        if(!$check){

          foreach ($backup as $key => $dato) {
        extract($dato);
         
          $valori=array(
          'titolomenu'=> $titolomenu, 
          'titolo' => $titolo, 
          'linkimg' => $linkimg, 
          'ordina' => $ordina, 
          'titolobottone' => $titolobottone,
          'link'=> $link,
          'descrizione' => $descrizione
          );     
         $wpdb->insert("wp_coccoslider",$valori); 
        } 
        echo "Si e verificato un errore nel salvataggio";
            return;
    }     
     
} 
     echo "impostazioni salvate correttamente"; 
   die();
}
 
}
