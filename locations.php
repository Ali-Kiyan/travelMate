<?php
$view = new stdClass();
$view->pageTitle = 'Locations';
require_once __DIR__ . '/vendor/autoload.php';


    $database = new travelMateProject\LocationTable();
    $locations = $database->fetchAllLocations();


if(isset($_POST['Dsubmit']))
{

    $locationdb = new travelMateProject\LocationTable();
    $respond = $locationdb->delete($_POST['Location_id']);

    if($respond)
    {
        redirect_to("./locations.php");
    }
    else
    {
        $view->result = '<div class="alert alert-danger">Please check your input </div>';
    }

}

require_once __DIR__ . '/Views/locations.phtml';

