<?php
$WeatherSource = "https://api.forecast.io/forecast/57004cfedb47701e9258014f2d1f0ed5/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>