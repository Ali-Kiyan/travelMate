<?php
$view = new stdClass();
$view->pageTitle = 'Locations';
require_once __DIR__ . '/vendor/autoload.php';


    $database = new travelMateProject\LocationTable();
    $locations = $database->fetchAllLocations();


require_once __DIR__ . '/Views/locations.phtml';

