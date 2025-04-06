<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weersvoorspelling</title>
    <style>
    table {
        width: 100%;
        font-family: sans-serif;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color:rgb(175, 255, 187);
    }
    .temperatuur {
        font-weight: bold;
        color:rgb(155, 249, 89);
    }
</style>
</head>
<body>
<?php

$weersvoorspelling = [
    "maandag" => 15,
    "dinsdag" => 14,
    "woensdag" => 34,
    "donderdag" => 4,
    "vrijdag" => 20, 
    "zaterdag" => 41,
    "zondag" => 1
];

$dagen = ["maandag", "vrijdag", "dinsdag", "donderdag", "zaterdag"];

foreach ($dagen as $dag) {
    $temperatuur = $weersvoorspelling[$dag];
    echo "<p>Vandaag " . $dag . " is het " . $temperatuur . " graden</p>";
}

print_r($weersvoorspelling);


echo "<table>";
echo "<tr><th>Dag</th><th>Graden</th></tr>";

foreach ($weersvoorspelling as $dag => $temperatuur) {
    echo "<tr><td>" . $dag . "</td><td>" . $temperatuur . "</td></tr>";
}

echo "</table>";

?>
</body>
</html>