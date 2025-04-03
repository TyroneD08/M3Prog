<?php

$stad = $_GET['stad'];
$temperatuur = $_GET['temperatuur'];
$land = $_GET['land'];


echo "<html><head><title>Querystrings</title></head><body>";
echo "<h1>Querystring waarden:</h1>";
echo "<p>stad: " . $stad . "</p>";
echo "<p>temperatuur: " . $temperatuur . "</p>";
echo "<p>land: " . $land . "</p>";
echo "</body></html>";
