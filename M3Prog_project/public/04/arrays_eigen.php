<?php

$streamers = ["iShowSpeed", "Kai Cenat", "Druski", "Agent 00", "Caseoh"];

echo "<br>";

print_r($streamers);

echo "<br>";
var_dump($streamers);

echo "<br>";
echo count($streamers). "<br>";

echo "<br>";

array_push($streamers, "Sketch");

echo "<br>";
echo count($streamers);

echo "<br>";
array_push($streamers, "JasonTheWeen");

echo "<br>";
print_r($streamers);

echo "<br>";
var_dump($streamers);

echo "<br>";
echo count($streamers). "<br>";

echo "<br>";
echo implode(' >> ', $streamers);

echo "<br>";

echo "<br>";
echo implode('  ', $streamers);

echo "<br>";

echo "<br>";
echo implode(',<br> ', $streamers);

echo "<br>";
echo "<br>";

sort($streamers);
echo implode(' ,<br> ', $streamers);
