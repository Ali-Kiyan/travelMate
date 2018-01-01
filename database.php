<?php
$view = new stdClass();
$view->pageTitle = 'Database';
require_once __DIR__ . '/vendor/autoload.php';
$database = new travelMateProject\UserTable();
$view->userList = $database->fetchAllUsers();


if(isset($_POST['Rsubmit']))
{
    $handle = new travelMateProject\UserTable();

    $v = $handle->insertUser($_POST);

     if(!$v)
     {
         $view->result = ' Not a valid number.';
     }
     else
     {
         $view->result = $v;
     }

}

require_once __DIR__ . '/Views/register.phtml';
// require_once __DIR__ . '/Views/users.phtml';
