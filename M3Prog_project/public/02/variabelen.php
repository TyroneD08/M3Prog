<?php
$stad = "Parijs";
$weer = "zonnig";
$aantal_mensen = 24500;
$temperatuur = 22.5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
        In <?php echo $stad; ?> leven <?php echo $aantal_mensen; ?> mensen. 
        Het is <?php echo $weer; ?>. 
        De temperatuur is nu <?php echo $temperatuur; ?> graden.
</p>
</body>
</html>