<?php
date_default_timezone_set('Europe/Istanbul');

$simdi = strtotime("simdi");

if ($simdi >= strtotime("06:00:00") and $simdi <= strtotime("10:00:00")) {
    echo "Günaydınlar!";
    echo "<br>";
    } 
elseif ($simdi > strtotime("10:00:00") and $simdi <= strtotime("17:00:00")) {
    echo "İyi günler!";
    echo "<br>";
    } 
elseif ($simdi > strtotime("17:00:00") and $simdi <= strtotime("20:00:00")) {
    echo "İyi Akşamlar!";
    echo "<br>";
    } 
elseif ($simdi > strtotime("20:00:00") and $simdi <= strtotime("00:00:00")) {
    echo "İyi Geceler!";
    echo "<br>";
    } 
else {
    echo "Esenlikler Dilerim";
    echo "<br>";
    }