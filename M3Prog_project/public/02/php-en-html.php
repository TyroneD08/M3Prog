<?php
// PHP blok met variabelen
$titel = "Een php html voorbeeld pagina";
$afbeelding_url = "sensen.jpg";
$afbeelding_alt = "een plaatje van Kekkai Sensen";
$auteur = "Ty_0W";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel; ?></title>
</head>
<body>
    <h1><?php echo $titel; ?></h1>
    <img src="<?php echo $afbeelding_url; ?>" alt="<?php echo $afbeelding_alt; ?>">
    
    <section>
        <h2>Auteur: <?= $auteur; ?></h2>
    </section>
</body>
</html>
