<?php



function add($getal1, $getal2)
{
    $som = $getal1 + $getal2; 
    return $som; 
}

echo add(100, 100) . "<br>";
echo add(4, 9) . "<br>";
echo add(33, 33);

function subtract($getal1, $getal2)
{
    return $getal1 - $getal2;
}

function divide($getal1, $getal2)
{
    if ($getal2 == 0) {
        return "Kan niet delen door nul"; 
    }
    return $getal1 / $getal2;
}

function multiply($getal1, $getal2)
{
    return $getal1 * $getal2;
}


echo "Aftrekken: " . subtract(10, 5) . "<br>";
echo "Delen: " . divide(10, 2) . "<br>";
echo "Vermenigvuldigen: " . multiply(10, 5) . "<br>";


