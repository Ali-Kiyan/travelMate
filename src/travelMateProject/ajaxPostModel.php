<?php
require_once '../../vendor/autoload.php';
$database = new travelMateProject\ChatTable();
$message =  $_POST['messages'];
$sql = "INSERT INTO Chat (User_id, Body) VALUES (:User_id, :Body)";
$results = $database->getdbh()->prepare($sql);

$response  = $results->execute(array(
    ':User_id' => 81,
    ':Body' => $message
));

echo $message;

