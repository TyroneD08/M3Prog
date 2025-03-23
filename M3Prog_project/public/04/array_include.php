<?php


$announcements = [

    "a.html",
    "b.html",
    "c.html",
    "d.html",
    "e.html"

];


    $reviews = 
    [
        ["demon's souls",10, "Very niceee!"],
        ["mario wonder",9.5, "i love this game, WOW!"],
        ["mega man 2",8, "Best game ever!!!"],
    ]
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        for ($i = 0; $i < count($announcements); $i++) { 
        $announcement = $announcements[$i];
            include "announcements/$announcement";
        }

        for ($i = 0; $i < count($reviews); $i++) { 
            $review = $reviews[$i]; 
            $title = $review[0];
            $cijfer = $review[1];
            $conclusie = $review[2];

                echo "<br>";
                echo "<div class='review'>$title</div>";
                echo "<br>";
                echo "<div class='score'>$cijfer</div>";
                echo "<br>";
                echo "<div class='conclusie'>$conclusie</div>";
        }

    
    ?>
</body>
</html>