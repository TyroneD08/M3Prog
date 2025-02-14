<?php
//hier komt de code 
$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favoriteGame = "Super metroid";
$mooisteGetal = 7;
$favorieteShow = "Breaking Bad";
$leuksteStad = "Amsterdam";

 $title;
 $datum;
 $tijd;
 $favoriteGame;
 $mooisteGetal;

?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo  $datum = date('d-m-Y');?>, en de tijd is <?php echo  $tijd = date('H:i');?> uur.
        <p><h2>Mooiste Getal:</h2> <?= $mooisteGetal ?></p>
    <p><h2>Favoriete Show:</h2> <?= $favorieteShow ?></p>
    <p><h2>Leukste Stad:</h2> <?= $leuksteStad ?></p>
        <p><h2>Mijn favoriete game</h2><?php echo $favoriete_game = "Super Metroid";?></p>
    </body>
</html>
