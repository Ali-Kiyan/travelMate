<?php
require_once __dir__ . "/Views/template/included_functions.php";
confirm_logged_in ();
if(isset($_GET))
{

$Country = $_GET['Country'];
$City = $_GET['City'];
//using open weather API
$api_url = "https://api.openweathermap.org/data/2.5/forecast?q=" . $City . "," . $Country . "&appid=e4b204037b59965c815e80d927e51338";
$weather_data = file_get_contents($api_url);
$json = json_decode($weather_data, TRUE);
//echo '<pre>'; var_dump($json) ;echo '</pre>';

$weatherArray['humidity'] = $json['list'][0]['main']['humidity'];
$weatherArray['weatherCondition'] = $json['list'][0]['weather'][0]['description'];
$weatherArray['windSpeed'] = $json['list'][0]['wind']['speed'];
$weatherArray['windDirection'] = $json['list'][0]['wind']['deg'];
$weatherArray['temp'] = $json['list'][0]['main']['temp'];
$weatherArray['pressure'] = $json['list'][0]['main']['pressure'];


}


require_once __DIR__ . '/Views/weatherForecast.phtml';












