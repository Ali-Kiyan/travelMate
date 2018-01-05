<?php
require_once '../../vendor/autoload.php';

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
        echo'<div class="chatStyle">';
        echo '<div class="Brown" style="padding: 10px; font-size: 1.4rem;border-radius: 50px !important; margin-bottom: 14px;">' . $value['Body'];
        echo '<div class="right">' . substr((string)$value['Created_at'],11,20) . '</br>' . '</div>';
        echo'</div>';

    }


