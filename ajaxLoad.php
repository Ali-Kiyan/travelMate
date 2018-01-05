<?php
require_once __DIR__ . '/vendor/autoload.php';

    $database = new travelMateProject\ChatTable();
    $sql = 'SELECT * FROM Chat';
    $results = $database->getdbh()->prepare($sql);
    $results->execute();
    $ChatArray = array();
    while($row = $results->fetch())
    {
        $chatArray[] = $row;
    }
    foreach ($chatArray as $key => $value)
    {
        echo $value['Body'] . '</br>';
    }



