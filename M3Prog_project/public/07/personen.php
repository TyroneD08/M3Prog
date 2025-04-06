<?php

$persoon = [
    "voornaam" => "Luigi",
    "achternaam" => "Mario",
    "leeftijd" => 19,
    "favoriet eten" => "pasta",
    "minst favoriet eten" => "paddenstoelen",
    "woonplaats" => "mushroom kingdom"
];

echo "<table>";
echo "<thead><tr><th>key</th><th>value</th></tr></thead>";
echo "<tbody>";

foreach ($persoon as $key => $value) {
    echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
}

echo "</tbody></table>";

