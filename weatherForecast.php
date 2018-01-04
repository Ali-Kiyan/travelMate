<?php

if(isset($_GET))
{

$country = $_GET['Country'];
$city = $_GET['City'];
//using open weather API
$api_url = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "," . $country . "&appid=e4b204037b59965c815e80d927e51338";
$weather_data = file_get_contents($api_url);
$json = json_decode($weather_data, TRUE);
   var_dump($json);

}








require_once __DIR__ . '/Views/weatherForecast.phtml';












