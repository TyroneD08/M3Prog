<?php
$afstand = 987.45; 
$verbruik_per_km = 1 / 15; 
$tankinhoud = 50;
$brandstofprijs = 1.89;
$treinprijs = 60.00;


$benodigd_liters = $afstand * $verbruik_per_km;
$totale_kosten_auto = $benodigd_liters * $brandstofprijs;
$aantal_tankbeurten = ceil($benodigd_liters / $tankinhoud);


echo "Totale afstand: $afstand km<br>";
echo "Aantal liters benzine: " . number_format($benodigd_liters, 2) . " L<br>";
echo "Totale brandstofkosten: €" . number_format($totale_kosten_auto, 2) . "<br>";
echo "Aantal tankbeurten: $aantal_tankbeurten<br>";

if ($totale_kosten_auto > $treinprijs) {
    echo "Ik ga met de trein.";
} else {
    echo "Ik ga met de auto.";
}
?>
