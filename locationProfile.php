<?php
require_once __dir__ . "/Views/template/included_functions.php";
confirm_logged_in ();
$view = new stdClass();
$view->pageTitle = 'Locationprofile';
require_once __DIR__ . '/vendor/autoload.php';

$locationdb = new travelMateProject\LocationTable();
$Current_Location = $locationdb->fetchRecord($_GET['Location_id']);

if(isset($_POST['Usubmit']))
{
    $locationdb = new travelMateProject\LocationTable();
    $locationinfo["Location_id"] = $_GET["Location_id"];
    $locationinfo["Name"] = $_POST["Username"];
    $locationinfo["Description"] = $_POST["Password"];


    $respond = $locationdb->editUser($locationinfo);

    if($respond)
    {
        redirect_to("./locationProfile.php");
        $view->result = '<div class="alert alert-success">Successfully Updated </div>';
    }
    else
    {
        $view->result = '<div class="alert alert-danger">Please check your input </div>';
    }

}


require_once __DIR__ . '/Views/locationprofile.phtml';

