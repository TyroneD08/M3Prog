<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) {
    echo $amount . "<br>";
    echo $fromCurrency . "<br>";
    echo $toCurrency . "<br>";
}

function generateRandomString($length) {
    echo $length . "<br>";
}

function calculateArea($length, $width) {
    echo $length . "<br>";
    echo $width . "<br>";
}

function sendEmail($to, $from, $subject, $message) {
    echo $to . "<br>";
    echo $from . "<br>";
    echo $subject . "<br>";
    echo $message . "<br>";
}


convertCurrency(100, "euro", "yen");
generateRandomString(10);
calculateArea(10, 20);
sendEmail("leraar@college.nl", "student@college.nl", "huiswerk", "voor volgende week");

?>
