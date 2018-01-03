<?php
$view = new stdClass();
$view->pageTitle = 'Login';
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['Lsubmit']))
{
    $database = new travelMateProject\UserTable();
    $_SESSION["Username"] = $_POST["Username"];
    //ecryption
    $_POST["Password"] = password_hash($_POST["Password"], PASSWORD_BCRYPT);
    $_SESSION["Password"] = $_POST["Password"];
    $result = $database->auth($_SESSION["Username"], $_SESSION["Password"]);
    if($result)
    {
      header('location: ./Views/Dashboard.phtml');
    }
    else
    {
        $view->result = '<div class="alert alert-danger">Username/Password is wrong </div>';
    }

}


require_once __DIR__ . '/Views/login.phtml';

