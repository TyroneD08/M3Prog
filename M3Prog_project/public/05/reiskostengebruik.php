<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>reiskostengebruik</title>
</head>
<body>

<?php

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs) {

    $aantal_liters = $afstand_km / $km_per_liter;


    $kosten_euro = $aantal_liters * $liter_prijs;

    return $kosten_euro;
}

$ritten = [
    "Berlijn" => [663, 15, 1.90],
    "Stockholm" => [1438, 20, 1.46],
    "Kiev" => [1991, 18.47, 2.23]
];


foreach ($ritten as $stad => $waarden) {
    list($afstand, $verbruik, $prijs_per_liter) = $waarden;
    $kosten = berekenRitKosten($afstand, $verbruik, $prijs_per_liter);
    echo strtolower($stad) . ": " . number_format($kosten, 2, ',', '.') . "<br>";
}
?>
</body>
</html>
