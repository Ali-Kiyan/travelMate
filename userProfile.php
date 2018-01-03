<?php
require_once __dir__ . "/Views/template/included_functions.php";
$view = new stdClass();
$view->pageTitle = 'Userprofile';
require_once __DIR__ . '/vendor/autoload.php';
$userdb = new travelMateProject\UserTable();
$Current_User = $userdb->fetchUser($_SESSION['User_id']);

if(isset($_POST['Usubmit']))
{
    $userdb = new travelMateProject\UserTable();
    $_SESSION["First_Name"] = $_POST["First_Name"];
    $_SESSION["Username"] = $_POST["Username"];
    $_SESSION["Password"] = $_POST["Password"];


    $respond = $userdb->editUser($_POST);

    if($respond)
    {
        redirect_to("./UserProfile.php");
        $view->result = '<div class="alert alert-success">Successfully Updated </div>';
    }
    else
    {
        $view->result = '<div class="alert alert-danger">Please check your input </div>';
    }

}


require_once __DIR__ . '/Views/userprofile.phtml';

