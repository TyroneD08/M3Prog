<?php

header("Content-Type: application/json");

$mario = ["name" => "mario", "gemiddeldeCijfer" => 7.5];
$wario = ["name" => "wario", "gemiddeldeCijfer" => 4.5];
$bowser = ["name" => "bowser", "gemiddeldeCijfer" => 6.0];
$toad = ["name" => "toad", "gemiddeldeCijfer" => 8.0];

$dataObject = ["studenten" => [$mario, $wario, $bowser, $toad]];

$jsonString = json_encode($dataObject);

echo $jsonString;