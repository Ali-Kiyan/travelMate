<?php

namespace travelMateProject;
session_start();
require_once  './Chat.php';
require_once  './TableAbstract.php';


class chatTable extends TableAbstract {
    protected $name = 'Chat';
    protected $primaryKey = 'Chat_id';

    public function fetchAllChats() {
        $results = $this->fetchAll();
        $ChatArray = array();
        while($row = $results->fetch()) {
            $ChatArray[] = new Chat($row);
        }
        return $ChatArray;
    }

    public function getdbh()
    {
        return $this->dbh;
    }


}
