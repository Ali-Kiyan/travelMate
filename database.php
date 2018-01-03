<?php
$view = new stdClass();
$view->pageTitle = 'Database';
require_once __DIR__ . '/vendor/autoload.php';
$database = new travelMateProject\UserTable();
$view->userList = $database->fetchAllUsers();


if(isset($_POST['Rsubmit']))
{
    $handle = new travelMateProject\UserTable();

    $response = $handle->insertUser($_POST);

     if(!$response)
     {
         $view->result = '<div class="alert alert-danger">Please check you input </div>';
     }
     else
     {
         $view->result = '<div class="alert alert-success">You are successfully added to the database, log in !</div>';
     }

}


require_once __DIR__ . '/Views/register.phtml';
// require_once __DIR__ . '/Views/users.phtml';
