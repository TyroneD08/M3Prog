<?php

$standaardString = 'hello world<br>';
$extraString = "extra world<br>";
$voornaam = "luigi<br>";
$achternaam = "mario<br>";

$fullname = $voornaam . " " . $achternaam;

echo $fullname;
echo $standaardString;
echo $extraString;




$naam = "Yoshi";
$ondertekentDoor = "directeur bowser";

$emailTekst = "
Beste $naam,<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze Goomba's vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :)
";

echo $emailTekst;

?>

