<?php
$view = new stdClass();
$view->pageTitle = 'Login';
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['Lsubmit']))
{
    $database = new travelMateProject\UserTable();
    $result = $database->auth($_POST["Username"], $_POST["Password"]);
    if($result)
    {
      header('location: ./Views/Dashboard.phtml');
    }
    else
    {
        $view->result = '<div class="alert alert-danger">Username/Password is wrong </div>';
    }

}

var_dump($_SESSION);

require_once __DIR__ . '/Views/login.phtml';

