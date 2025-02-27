<?php

$getal = 12345.67891;

$afgerond1 = ceil($getal);
echo "Als je $getal naar boven afrondt, krijg je: $afgerond1 <br>";

$getal2 = 12345.67891;
$afgerond2 = floor($getal2);
echo "Als je $getal2 naar beneden afrondt, krijg je: $afgerond2 <br>";

$random1 = rand(1, 100);
$random2 = rand(1, 100);
$random3 = rand(1, 100);


$som = $random1 + $random2;

if ($random3 != 0) {
    $uitkomst = $som / $random3;
    echo "De som van $random1 en $random2 is: $som <br>";
    echo "De uitkomst van $som gedeeld door $random3 is: $uitkomst";
} else {
    echo "Deling door nul is niet mogelijk.";
}
?>
