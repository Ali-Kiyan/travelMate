<?php
$view = new stdClass();
$view->pageTitle = 'Database';
require_once __DIR__ . '/vendor/autoload.php';
$database = new travelMateProject\UserTable();
$view->userList = $database->fetchAllPeople();
require_once __DIR__ . '/Views/database.phtml';