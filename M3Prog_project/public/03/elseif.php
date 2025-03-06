<?php
$stoplichtkleur = "R" ;

if($stoplichtkleur < "O")//oranje
{
   echo  "<button style='background-color:#FFA500;height:25px;width:25px;'/>";
}
else if($stoplichtkleur > "G")//groen
{
   echo "<button style='background-color:#008000;height:25px;width:25px;'/>";
}
else//rood
{
  echo  "<button style='background-color:#FF0000;height:25px;width:25px;'/>";
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

</body>
</html>
