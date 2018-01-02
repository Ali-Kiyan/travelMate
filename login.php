<?php
$view = new stdClass();
$view->pageTitle = 'Login';
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['Lsubmit']))
{
    $database = new travelMateProject\UserTable();
    $_SESSION["Username"] = $_POST["Username"];
    $_SESSION["Password"] = $_POST["Password"];
    $result = $database->auth($_SESSION["Username"], $_SESSION["Password"]);
    

}


require_once __DIR__ . '/Views/login.phtml';

