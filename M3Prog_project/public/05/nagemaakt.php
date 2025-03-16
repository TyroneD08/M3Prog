<?php

$dezeGaatMee = "deze waarde wordt meegenomen";

function mijnPrint($printText) {
    print($printText);
    print("<br>");
}


mijnPrint("regel 1");

mijnPrint("regel 2");

mijnPrint("regel 3");

mijnPrint("De functie verwacht dat er een waarde (dus tekst) wordt doorgegeven.");

mijnPrint($dezeGaatMee);

