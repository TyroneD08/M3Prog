<?php
$pokemons = ["Pikachu", "Charizard", "Bulbasaur", "Squirtle", "Jigglypuff"];

$images = [
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png", 
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png", 
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/039.png" 
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon loop</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<h1>{$pokemons[$i]}</h1>";
        echo "<img src='{$images[$i]}' alt='{$pokemons[$i]}'>";
    }
    ?>
</body>
</html>
