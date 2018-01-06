<?php
require_once __dir__ . "/Views/template/included_functions.php";
confirm_logged_in ();
if(isset($_GET))
{

$Country = $_GET['Country'];
$City = $_GET['City'];
//using open weather API
$api_url = "https://api.openweathermap.org/data/2.5/weather?q=" . $City . "," . $Country . "&appid=e4b204037b59965c815e80d927e51338";
$weather_data = file_get_contents($api_url);
$json = json_decode($weather_data, TRUE);
$weatherArray['humidity'] = $json['main']['humidity'];
$weatherArray['currentCondition'] = $json['weather'][0]['main'];
$weatherArray['windSpeed'] = $json['wind']['speed'];
$weatherArray['windDirection'] = $json['wind']['deg'];
$weatherArray['temp'] = $json['main']['temp'];

}


require_once __DIR__ . '/Views/weatherForecast.phtml';












