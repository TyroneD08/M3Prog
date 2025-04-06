<?php

$weer = [
    "maandag" => 15,
    "dinsdag" => 14,
    "woensdag" => 34,
    "donderdag" => 4
];

$persoon = [
    "voornaam" => "Luigi",
    "achternaam" => "Mario",
    "leeftijd" => 19,
    "favoriet eten" => "pasta",
    "minst favoriet eten" => "paddenstoelen",
    "woonplaats" => "mushroom kingdom"
];

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "tetris" => 10
];

$verbruik = [
    "ps5" => 19,
    "wasmachine" => 30,
    "telefoon" => 1,
    "nes" => 2,
    "gameboy" => 1
];


$jsonArray = [
    "trophiesPerGame" => $trophiesPerGame,
    "persoon" => $persoon,
    "weer" => $weer,
    "verbruik" => $verbruik
];

echo json_encode($jsonArray);


header("Content-Type: application/json");
