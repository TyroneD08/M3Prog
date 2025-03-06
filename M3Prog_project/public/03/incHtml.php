<?php
$loggedIn = false;
if(isSet($_Get['loggedIn']))
{
    $loggedIn = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button>Log in</button>
    <?php

    if($loggedIn = true)
    {
        include "views/myDashboard.html";
    }
    else
    {
        include "views/home.html";
    }
    ?>
</body>
</html>