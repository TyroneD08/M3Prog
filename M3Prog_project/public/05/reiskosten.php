<?php

$afstand = 100;
$verbruik = 15; 
$prijs_per_liter = 1.80;


function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs) {
    
    $benodigd_liters = $afstand_km / $km_per_liter;


    $totale_kosten = $benodigd_liters * $liter_prijs;

    return $totale_kosten;
}

$kosten = berekenRitKosten($afstand, $verbruik, $prijs_per_liter);
echo "De totale ritkosten zijn: €" . number_format($kosten, 2, ',', '.');
