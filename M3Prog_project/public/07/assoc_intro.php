<?php

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "tetris" => 10
];


$trophiesForDS = $trophiesPerGame["Demon's souls"];
$trophiesForMW = $trophiesPerGame["Mario wonder"];
$trophiesForRO = $trophiesPerGame["Rayman Origins"];
$trophiesForTR = $trophiesPerGame["tetris"];



echo $trophiesForDS . "<br>";
echo $trophiesForMW . "<br>";
echo $trophiesForRO . "<br>";
echo $trophiesForTR;

?>