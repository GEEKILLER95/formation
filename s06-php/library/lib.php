<?php

function calculPrix($prix_ht, $remise){                  
    $base_ht = $prix_ht - $remise;    
    $prix_ttc = $base_ht * 1.20;     
    $retour = array($base_ht, $prix_ttc);
    return $retour; 
} 

?>