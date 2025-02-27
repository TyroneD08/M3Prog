<?php

$celsius = 25;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";


$kelvin = $celsius + 273.15;
echo "{$celsius} graden Celsius = {$kelvin} Kelvin. <br/>";


$kelvin = 300;
$celsius = $kelvin - 273.15;
echo "{$kelvin} Kelvin = {$celsius} graden Celsius. <br/>";
?>
