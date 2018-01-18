<?php
require_once '../../vendor/autoload.php';

    $database = new travelMateProject\ChatTable();
    $sql = 'SELECT * FROM Chat  ORDER BY Chat_id DESC LIMIT 30';
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
        echo '<div class="Brown" style="padding: 10px; font-size: 1.2rem;border-radius: 50px !important; margin-bottom: 14px;overflow-wrap: break-word;margin-right: 16px !important;">'. '<span style="font-size:0.9rem;">' . $value['Username'] . '</span>' . ' : ' . $value['Body'].' <br><div class="right" style="font-size: 0.9rem;">' . substr((string)$value['Created_at'],11,20) . '</br>' . '</div>';
        echo '</div>';

    }


