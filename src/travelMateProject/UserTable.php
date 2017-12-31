<?php

namespace travelMateProject;
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/TableAbstract.php';


class UserTable extends TableAbstract {
  protected $name = 'User';
  protected $primaryKey = 'User_id';
  public function fetchAllUsers() {
    $results = $this->fetchAll();
    var_dump($results);
    $userArray = array();
    while($row = $results->fetch()) {
      $userArray[] = new User($row);
    }
    return $userArray;
  }
}

