<?php

function vliegkosten(float $afstand, float $kerosinePrijs, int $bagageKilo, string $klasse): float {
   
    $totaleAfstand = $afstand * 2;

   
    $kosten = ($kerosinePrijs * $totaleAfstand) / 30;

    
    $kosten += $bagageKilo * 5;

    if (strtolower($klasse) === 'business class') {
        $kosten *= 1.5;
    }

    return $kosten;
}


$afstand = 1000;
$kerosinePrijs = 1.20;
$bagageKilo = 20;
$klasse = 'Economy class';

$totaleKosten = vliegkosten($afstand, $kerosinePrijs, $bagageKilo, $klasse);

echo "De totale kosten voor de vlucht zijn: €" . number_format($totaleKosten, 2);

