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
        echo '<div class="Brown">' . $value['Body'];

        echo '<div class="Brown right">' . substr((string)$value['Created_at'],11,20) . '</br>' . '</div>';
    }



