<?php

$city = $_GET["city"];
$city= str_replace(" ", "", $city); //replaces spaces in city variable

$contents = file_get_contents("http://www.weather-forecast.com/locations/$city/forecasts/latest");

preg_match('/<span class="phrase">(.*?)<\/span>/is', $contents, $matches);
 
 echo $matches[1];
?> 

