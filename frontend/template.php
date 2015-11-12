
       <link rel="stylesheet" media="screen" href="<?php
echo plugins_url('../lib/css/bootstrap.min.css', __file__); ?>">
<script src="<?php
echo plugins_url('../lib/js/bootstrap.min.js', __file__); ?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php
echo plugins_url('/css/style.css', __file__); ?>">
  
 
    <?php if(!empty($dati)): ?>
                <div>
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    
                        <?php foreach ($dati as $i => $dato) :  ?>
                        <div class="item <?php if($i==0) echo " active"; ?>">
                            <img src="<?php echo $dato["linkimg"] ?>">
                            <div class="container">
                                <div class="carousel-caption">
                                     <?php if(!empty($dato["titolo"])): ?>
                                    <h1><?php echo $dato["titolo"] ?></h1>
                                             <hr>
                                <?php endif; ?>
                                <?php if(!empty($dato["descrizione"])): ?>
                                    <p><?php echo $dato["descrizione"] ?></p>
                                <?php endif; ?>
                                    <?php if (!empty($dato["link"]) || !empty($dato["titolobottone"])): ?>
                                    <p><a class="btn btn-lg btn-default" href="<?php if(!empty($dato["link"])) echo $dato["link"]; ?>" role="button"><?php if(!empty($dato["titolobottone"])) echo $dato["titolobottone"] ?></a></p>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                       <?php $i++; ?> 
                       <?php endforeach; ?> 
                     <?php endif; ?>   
                    </div>
                </div>
                <?php if(!empty($dati)): ?>
                <div class="btn-group groupList" role="group" aria-label="..." id ="bottoni_slidercocco">
                
                        <?php foreach ($dati as $i => $dato) :  ?>
                    <div class="btn-group" role="group" >
                        <button type="button" id = "bottone_slidercocco_<?php echo $i; ?>" onclick="cambia(<?php echo $i; ?>)" class="btn btn-default <?php if($i==0) echo 'active';?>"><?php if(!empty($dato["titolomenu"])) echo $dato["titolomenu"] ?></button>
                    </div>
                       <?php endforeach; ?> 
                      
                </div>
               </div>
        
    
    <?php else : ?>
            <div >Configurare prima le impostazione per usare lo slider</div>
    <?php endif; ?>
    <script type="text/javascript" src="<?php
echo plugins_url('/js/script.js', __file__); ?>"></script>