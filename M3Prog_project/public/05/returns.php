<?php


function mijnFunction()
{
    return 1;
}

$mijnFunctionResultaat = mijnFunction(); 
print($mijnFunctionResultaat);

echo "<br>";

function returnVariable()
{
 
    $result = rand(1, 1000000000);
    return $result;
}


echo returnVariable() . "<br>";
echo returnVariable() . "<br>";
echo returnVariable();
