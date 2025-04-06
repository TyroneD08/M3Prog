<!DOCTYPE html>
<html>
<head>
<title>Energieverbruik</title>
<style>
    body {
        font-family: sans-serif;
    }
    table {
        width: 50%;
        margin: 20px 0;
        background-color: grey;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        color: black;
    }
    th {
        background-color:rgb(235, 165, 14);
    }
    .verbruik {
        color:rgb(234, 152, 10);
        font-weight: bold;
    }
</style>
</head>
<body>

<h1>Energieverbruik van Apparaten</h1>

<?php

$verbruik = [
    "ps5" => 19,
    "wasmachine" => 30,
    "telefoon" => 1,
    "nes" => 2,
    "gameboy" => 1
];

echo "<table>";
echo "<tr><th>Apparaat</th><th>Verbruik (KwH)</th></tr>";

foreach ($verbruik as $apparaat => $kwh) {
    echo "<tr><td>" . ucfirst($apparaat) . "</td><td class='verbruik'>" . $kwh . "</td></tr>";
}

echo "</table>";

$verbruik = [
    "ps5" => 19,
    "wasmachine" => 30,
    "telefoon" => 1,
    "nes" => 2,
    "gameboy" => 1
];

$totaal = 0;

foreach ($verbruik as $apparaat => $kwh) {
    $totaal += $kwh; 
}


echo "<p>Totaal verbruik: " . $totaal . " KwH</p>";

?>

</body>
</html>