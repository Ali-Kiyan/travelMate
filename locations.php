<?php
$view = new stdClass();
$view->pageTitle = 'Locations';
require_once __DIR__ . '/vendor/autoload.php';
require_once __dir__ . "/Views/template/included_functions.php";
confirm_logged_in ();

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


if(isset($_POST['Csubmit']))
{
    $locationdb = new travelMateProject\LocationTable();
    $newLocation['Name'] = $_POST['Name'];
    $newLocation['Description'] = $_POST['Description'];
    $respond = $locationdb->insertLocation($newLocation);
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

