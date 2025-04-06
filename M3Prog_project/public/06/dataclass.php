<?php

class student
{
    public $name;
    public $gemiddeldeCijfer;
}

class dataObject
{
    public $studenten;
}

$mario = new student();
$mario->name = "mario";
$mario->gemiddeldeCijfer = 8;

$dataObject = new dataObject();
$dataObject->studenten = [$mario, $bowser, $peach, $wario];

$mario = new student();
$mario->name = "mario";
$mario->gemiddeldeCijfer = 8;
$mario->klas = "flower";

$bowser = new student();
$bowser->name = "bowser";
$bowser->gemiddeldeCijfer = 6;
$bowser->klas = "castle";

$peach = new student();
$peach->name = "peach";
$peach->gemiddeldeCijfer = 9;
$peach->klas = "princess";

$wario = new student();
$wario->name = "wario";
$wario->gemiddeldeCijfer = 4.5;
$wario->klas = "unknown"; 

$dataObject = new dataObject();
$dataObject->studenten = [$mario, $bowser, $peach, $wario];

foreach ($dataObject->studenten as $student) {
    echo "Naam: " . $student->name . "<br>";
    echo "Gemiddeld cijfer: " . $student->gemiddeldeCijfer . "<br>";
    echo "Klas: " . $student->klas . "<br><br>"; 
}


