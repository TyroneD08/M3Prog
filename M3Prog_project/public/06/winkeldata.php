<?php

$winkel='{
    "winkel": {
        "producten": [
            {
                "productNaam": "Laptop",
                "details": {
                    "prijs": 999.99,
                    "voorraad": 50
                }
            },
            {
                "productNaam": "Smartphone",
                "details": {
                    "prijs": 699.99,
                    "voorraad": 100
                }
            }
        ]
    }
}';

$winkelObj = json_decode($winkel, true);

foreach ($winkelObj['winkel']['producten'] as $product) {
    if ($product['productNaam'] == 'Smartphone') {
        echo "Smartphone<br>";
        echo $product['details']['prijs'] . " euro<br><br>";
    } elseif ($product['productNaam'] == 'Laptop') {
        echo "Laptop<br>";
        echo $product['details']['voorraad'] . " op voorraad<br>";
    }
}
