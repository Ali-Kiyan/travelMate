<?php
if(!$_GET['More']) {
    require_once __dir__ . "/Views/template/included_functions.php";
    confirm_logged_in();
}
$view = new stdClass();
$view->pageTitle = 'Location profile';
require_once __DIR__ . '/vendor/autoload.php';

$locationdb = new travelMateProject\LocationTable();
$Current_Location = $locationdb->fetchRecord($_GET['Location_id']);


if(isset($_POST['Usubmit']))
{
    $locationdb = new travelMateProject\LocationTable();
    $respond = $locationdb->editLocation($_POST);

    if($respond)
    {
        redirect_to("./locations.php");
    }
    else
    {
        $view->result = '<div class="alert alert-danger">Please check your input </div>';
    }

}


    if($_GET['More'])
    {
        require_once __DIR__ . '/Views/location.phtml';
    }
    else
    {
        require_once __DIR__ . '/Views/locationprofile.phtml';
    }


