<?php

$filmCollectie = [
    "bioscoop" => [
        "films" => [
            [
                "titel" => "Scream",
                "details" => [
                    "regisseur" => "Wes Craven",
                    "jaar" => 1996,
                    "genre" => "Horror/Thriller"
                ]
            ],
            [
                "titel" => "Power Rangers",
                "details" => [
                    "regisseur" => "Dean Israelite",
                    "jaar" => 2017,
                    "genre" => "Actie/Avontuur"
                ]
            ]
        ]
    ]
];


$jsonString = json_encode($filmCollectie);

echo str_replace("\n", "<br>", $jsonString);
