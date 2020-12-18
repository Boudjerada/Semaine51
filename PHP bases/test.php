<?php
function calculPrix($prix_ht, $remise) 
{              
    $base_ht = $prix_ht - $remise;
    $prix_ttc = $base_ht * 1.20; 
    $retour = array($base_ht, $prix_ttc);

    return $retour; 
}   

$retour =  calculPrix(110, 10);

echo"- Base HT : ".$retour[0]." €<br>"; // affiche 100 €
echo"- Prix TTC : ".$retour[1]." €<br>"; // affiche 120 € 

echo "<br>";


?>