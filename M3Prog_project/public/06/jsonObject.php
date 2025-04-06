<?php 

header("Content-Type: application/json");


$steden =  [
         "Amsterdam",
          "Rotterdam",
          "Utrecht"
        ];

$jsonString = json_encode($steden);

echo $jsonString